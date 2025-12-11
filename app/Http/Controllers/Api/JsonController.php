<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\AlbumTrack;
use App\Models\Project; 
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;
use FFMpeg;
use FFMpeg\Coordinate\TimeCode;

use GuzzleHttp\Client;
use Auth;

class JsonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($project_id=0)
    { 
        if($project_id>0){
            $results = Album::where('project_id',$project_id)->get(); 
        }else{
            $results = Album::get(); 
        } 
        
        return view('admin.album.index', compact('results'));
    }




    public function userSubmitAlbum()
    {
        $results = Album::where('status', '1')->get();
        return view('user.album.index', compact('results'));
    }
    /**
     * Show the form for creating a new resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Project::get();
        return view('admin.album.create', compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    public function store(Request $request,$p_id,$album_id)
    { 
        set_time_limit(1200); 
        $data    = new Album();
        $input   = $request->all(); 
        $project = Project::where('secret_id',$p_id)->first();
        $input['project_id'] =$project->id;
        // via file url 
        // $imageUrl = 'https://pmd-assets.s3.amazonaws.com/albums/294/41238/a31ab6dcb59bd6c8988a93eb8eed2fbd.wav';
        $imageUrl = $input['file_url'];
        $client   = new Client();
        $response = $client->get($imageUrl);
        $imageContents = $response->getBody()->getContents(); 
        $filename = time() . '_' . basename($imageUrl); // Generate unique filename
        $filePath = 'assets/files/' . $filename; // Path within the public asset folder 
        file_put_contents(public_path($filePath), $imageContents);// Save the image to the public asset folder
        $input['file'] = $filename;  
        $data->fill($input)->save();
        if ( $filename) { //via file url
            // if ($file = $request->file('file')) { //via file 
            set_time_limit(1200);    
            $relativePath    = 'assets/files/'.$filename; 
            $fullPath        = public_path($relativePath); 
            $outputDirectory = public_path('assets/file_segments/'.$album_id);// Segment the audio file
            if (!file_exists($outputDirectory)) {
                mkdir($outputDirectory, 0755, true);
            }
    
           $result = $this->segmentAudio($fullPath, $outputDirectory,$data->id,$album_id);  
           if (file_exists($fullPath)) {
                    unlink($fullPath);
                }  
           return ['code'=>200, 'result'=>$result];
        }

         return ['code'=>201, 'result'=>'file not found'];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $farming
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $farming
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projects = Project::get();
        $data     = Album::findOrFail($id);
        return view('admin.album.edit', compact('data', 'projects'));
    }

 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Album::findOrFail($id);
        $input = $request->all();
        if ($file = $request->file('file')) {
            $name = time() . str_replace(' ', '', $file->getClientOriginalName());
            $file->move('assets/files/', $name);
            if ($data->image != null) {
                if (file_exists(public_path() . '/assets/files/' . $data->image)) {
                    unlink(public_path() . '/assets/files/' . $data->image);
                }
            }
            $input['file'] = $name;
        }

        $data->update($input);
        return redirect()->route('file-list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $farming
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $data = Album::findOrFail($id);  
        if ($data->file != null) { 
            if (file_exists(public_path() . '/assets/files/' . $data->file)) {
                unlink(public_path() . '/assets/files/' . $data->file);
            }  
        }

        $data->delete();
        return redirect()->route('file-list');
    } 
 
    private function segmentAudio($inputFile, $outputDirectory,$album_id ,$al_id)
    { 
        $ffmpeg   = FFMpeg\FFMpeg::create(); 
        $audio    = $ffmpeg->open($inputFile); 
        $duration = $audio->getStreams()->first()->get('duration'); 
        $segmentDuration = 20;  
        $chunks          = ceil($duration / $segmentDuration);  

        $chunkIndices    = range(0, $chunks - 1); // Create an array of chunk  
        shuffle($chunkIndices); // Shuffle the array of chunk indices
        $check = ceil($chunks*1);// 30%(0.3) if 100%(1) checking  

        for ($i = 0; $i < $check; $i++) { 
            $segment_id = $chunkIndices[$i].'_'.Uuid::uuid4()->toString();
            $start      = $chunkIndices[$i] * $segmentDuration; 
            $duration_g = min($segmentDuration, $duration - $start); //
            $audio->filters()->clip(TimeCode::fromSeconds($start),TimeCode::fromSeconds($duration_g));
            $audio->save(new FFMpeg\Format\Audio\Mp3(),$outputDirectory.'/'.$segment_id.'.mp3');
            $album_track_data = [
                                    'album_id'   => $album_id, 
                                    'segment_id' => $segment_id, 
                                    'start'      => $start, 
                                    'duration'   => $duration_g, 
                                    'result'     => '', 
                                    'status'     => ''  
                                ]; 
            $responce         = $this->pushOnAcr($segment_id ,$al_id);
            // return  $responce ;exit;
            // print_r($responce); exit;
            $flg              = json_decode($responce);
            $album_track_data['result'] = $responce;
            $album_track_data['status'] = $flg->status->code; 
            if($flg->status->code==0){ //if audio match then code woulde be 0 and we will stop this segmantation
               $album_track = AlbumTrack::create($album_track_data); 
               Album::where('id',$album_id)->update(['status'=>$flg->status->code , 'result'=>$responce]);
                return ['code'=>0, 'result'=>$responce]; //return 
            }else{ 
                $album_track = AlbumTrack::create($album_track_data);  
            }
 
              
        }
          
        Album::where('id',$album_id)->update(['status'=>$flg->status->code , 'result'=>$responce]);
        return ['code'=>101, 'result'=>$responce];
    }

    public function pushOnAcr($segment_id, $al_id)
    {      
        set_time_limit(1200);   
        $http_method = "POST";
        $http_uri = "/v1/identify";
        $data_type = "audio";
        $signature_version = "1" ;
        $timestamp = time() ; 
        // Replace "###...###" below with your project's host, access_key and access_secret.
        $requrl        = "http://identify-eu-west-1.acrcloud.com/v1/identify";
        $access_key    =  'd027ac7bae50872c47ec62f12d8777d9';
        $access_secret =  'mGa9JvSv01o9erltQWyW4AdqSbhysmCRdYObU34e';
        
        $string_to_sign = $http_method . "\n" . 
                          $http_uri ."\n" . 
                          $access_key . "\n" . 
                          $data_type . "\n" . 
                          $signature_version . "\n" . 
                          $timestamp;
        $signature = hash_hmac("sha1", $string_to_sign, $access_secret, true); 
        $signature = base64_encode($signature);  
        if ($segment_id) { 
            $file_path = public_path('assets/file_segments/'.$al_id.'/'.$segment_id.'.mp3');
            // $file_path = public_path('/assets/file_segments/'.'mytest5.mp3');
            //   print_r($file_path); exit;
            // Check if the file exists
            if (file_exists($file_path)) {
                // Get the file size
                $fileSize = filesize($file_path); 
            } else {
                return "File does not exist.". $file_path;
            }
        } else {
            return "No file uploaded.";
        } 
        //   return filesize($file->path());
        $fileSize1 = filesize($file_path);
        $cfile = new \CURLFile($file_path, "mp3", basename($file_path)); 
        $postfields = array(
                            "sample" => $cfile, 
                            "sample_bytes"=>$fileSize1, 
                            "access_key"=>$access_key, 
                            "data_type"=>$data_type, 
                            "signature"=>$signature, 
                            "signature_version"=>$signature_version, 
                            "timestamp"=>$timestamp
                            );
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $requrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        
        $result = curl_exec($ch); 
        if ($result == true) {  
            
            if (file_exists($file_path)) {
                    unlink($file_path);
                } 

             return $result ;
        } else {
           $errmsg = curl_error($ch);
           return $errmsg;
        }
         
        curl_close($ch);
         
    }

    
}
