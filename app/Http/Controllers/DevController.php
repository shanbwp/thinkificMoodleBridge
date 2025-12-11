<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use App\Models\Album;
use App\Models\AlbumTrack;
use App\Models\Track;
use App\Models\Generation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use FFMpeg;
use FFMpeg\Coordinate\TimeCode; 
use GuzzleHttp\Client;

class DevController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beneficiery = User::get();
        $generies = Generation::get();
        return view('admin.dashboard',compact('beneficiery','generies'));
    }

    public function sendFile($album_id)
    { 
        $project_id          = env('ACR_HELPER_PROJECT_ID'); //'efd14026-b553-4e3e-9ce8-f76723257cfd';
        $ACR_HELPER_POST_URL = env('ACR_HELPER_POST_URL'); //'efd14026-b553-4e3e-9ce8-f76723257cfd'; 
        $fileUrl    = 'https://pmd-assets.s3.amazonaws.com/albums/364/40593/3331148e894a5f1f094d862d8d14cc77.wav';
        $client     = new Client(); 
        $response = $client->post(''.$ACR_HELPER_POST_URL.$project_id.'/'.$album_id, [
            'form_params' => [
                'file_url'  =>  $fileUrl, 
                'source_id' =>  $album_id, 
            ],
        ]);
    
        $responseBody = $response->getBody()->getContents();
        // print_r($responseBody); exit;
        $statusCode = $response->getStatusCode();
        if ($statusCode === 200) { 
            return $responseBody;
        } else {
            return json_encode(['code'=>500 , 'result'=>'somthing went wrong']);
        }
         
    }

    public function sendFilePmd($album_id)
    { 
        $project_id          = env('ACR_HELPER_PROJECT_ID'); //'efd14026-b553-4e3e-9ce8-f76723257cfd';
        $ACR_HELPER_POST_URL = env('ACR_HELPER_POST_URL'); //'efd14026-b553-4e3e-9ce8-f76723257cfd'; 
        $album               = Album::find($album_id);  
        foreach($album->tracks as $track){ 
            $imageUrl   = $track->track_path;  
            // $imageUrl   = 'https://pmd-assets.s3.amazonaws.com/albums/294/41238/a31ab6dcb59bd6c8988a93eb8eed2fbd.wav';
            $client = new Client(); 
            $response = $client->post(''.$ACR_HELPER_POST_URL.$project_id.'/'.$album_id, [
                'form_params' => [
                    'file_url'  =>  $imageUrl, 
                    'source_id' =>  $track->id,// $album_id, 
                ],
            ]);
        
            $responseBody = $response->getBody()->getContents();
            print_r($responseBody); exit;
            $statusCode = $response->getStatusCode();
            if ($statusCode === 200) {
                 AlbumTrack::where('id',$track->id)->update(['acr_status'=>$responseBody->code ,'acr_result'=> $responseBody->result]);
                echo "successfuly";
            } else {
                echo "somthing went wrong"; 
            }
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dev.create');
    } 
  
   public function verifyTrack($id){
        $track = Track::find($id);
        if ($track) { 
            $file_path = public_path('/assets/images/track/'.$track->voice);
        }
   } 
    public function acrTestTest($id)
    {      
        set_time_limit(1200);  

        $http_method = "POST";
        $http_uri = "/v1/identify";
        $data_type = "audio";
        $signature_version = "1" ;
        $timestamp = time() ; 
        // Replace "###...###" below with your project's host, access_key and access_secret.
        $requrl = "http://identify-eu-west-1.acrcloud.com/v1/identify";
        $access_key =  'd027ac7bae50872c47ec62f12d8777d9';
        $access_secret =  'mGa9JvSv01o9erltQWyW4AdqSbhysmCRdYObU34e';
        
        $string_to_sign = $http_method . "\n" . 
                          $http_uri ."\n" . 
                          $access_key . "\n" . 
                          $data_type . "\n" . 
                          $signature_version . "\n" . 
                          $timestamp;
        $signature = hash_hmac("sha1", $string_to_sign, $access_secret, true);
        
        $signature = base64_encode($signature);
        
        // suported file formats: mp3,wav,wma,amr,ogg, ape,acc,spx,m4a,mp4,FLAC, etc 
        // File size: < 1M , You'de better cut large file to small file, within 15 seconds data size is better
        // $file = $argv[1];     
        // $file = $request->file('myfile') ;
       //  $file = asset('/assets/images/track/5.mp3') ;
       $track = AlbumTrack::find($id);
        if ($track) {
            // Get the file instance 1708930805_a31ab6dcb59bd6c8988a93eb8eed2fbd.wav 
            // $file_path = public_path('/assets/files/1708930805_a31ab6dcb59bd6c8988a93eb8eed2fbd.wav');
            // $file_path = public_path('/assets/file_segments/'.$track->segment_id.'.mp3');
            $file_path = public_path('/assets/file_segments/'.'mytest5.mp3');
            //   print_r($file_path); exit;
            // Check if the file exists
            if (file_exists($file_path)) {
                // Get the file size
                $fileSize = filesize($file_path);
                //    echo  $file->path();
                // Do something with the file size
                //  return "File size: $fileSize bytes";
            } else {
                return "File does not exist.";
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
                       "timestamp"=>$timestamp);
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $requrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        
        $result = curl_exec($ch);
        echo $result; echo "-------------------------------------------";
        $response = curl_exec($ch);
        if ($response == true) {
         $info = curl_getinfo($ch);
         print_r($info);
        } else {
           $errmsg = curl_error($ch);
           print $errmsg;
        }
        curl_close($ch);
         
    }

    public function acrTest(Request $request)
    {      
        set_time_limit(1200);  
        $http_method = "POST";
        $http_uri = "/v1/identify";
        $data_type = "audio";
        $signature_version = "1" ;
        $timestamp = time() ;
        
        
        // Replace "###...###" below with your project's host, access_key and access_secret.
        $requrl = "http://identify-ap-southeast-1.acrcloud.com/v1/identify";
        $access_key =  '8baed00d2ab07aa335b3c01ceed2d6b7';
        $access_secret =  'rLsYt00AXlVwtsQMIVWxpDjm30yi8KlgoBrh7REP';
        
        $string_to_sign = $http_method . "\n" . 
                          $http_uri ."\n" . 
                          $access_key . "\n" . 
                          $data_type . "\n" . 
                          $signature_version . "\n" . 
                          $timestamp;
        $signature = hash_hmac("sha1", $string_to_sign, $access_secret, true);
        
        $signature = base64_encode($signature);
        
        // suported file formats: mp3,wav,wma,amr,ogg, ape,acc,spx,m4a,mp4,FLAC, etc 
        // File size: < 1M , You'de better cut large file to small file, within 15 seconds data size is better
        // $file = $argv[1];     
        // $file = $request->file('myfile') ;
       //  $file = asset('/assets/images/track/5.mp3') ;
        if ($request->hasFile('myfile')) {
            // Get the file instance
            $file = $request->file('myfile');

            // Check if the file exists
            if (file_exists($file->path())) {
                // Get the file size
                $fileSize = filesize($file->path());
            //    echo  $file->path();
                // Do something with the file size
                //  return "File size: $fileSize bytes";
            } else {
                return "File does not exist.";
            }
        } else {
            return "No file uploaded.";
        }
     
        //   return filesize($file->path());
        $fileSize1 = filesize($file->path());
        $cfile = new \CURLFile($file->path(), "mp3", basename($file->path()));
        
        $postfields = array(
                       "sample" => $cfile, 
                       "sample_bytes"=>$fileSize1, 
                       "access_key"=>$access_key, 
                       "data_type"=>$data_type, 
                       "signature"=>$signature, 
                       "signature_version"=>$signature_version, 
                       "timestamp"=>$timestamp);
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $requrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        
        $result = curl_exec($ch);
        echo $result; exit;
        $response = curl_exec($ch);
        if ($response == true) {
         $info = curl_getinfo($ch);
         print_r($info);
        } else {
           $errmsg = curl_error($ch);
           print $errmsg;
        }
        curl_close($ch);
         
    }

    public function upload(Request $request)
    {
        set_time_limit(1200);   
        $audioPath = $request->file('audio')->store('public/audio');   
        $fullPath  = storage_path('app/' . $audioPath); // Get the full path to the uploaded file 
        $outputDirectory = storage_path('app/public/audio_segments');// Segment the audio file
        if (!file_exists($outputDirectory)) {
            mkdir($outputDirectory, 0755, true);
        }

        $this->segmentAudio($fullPath, $outputDirectory);  
        print_r('Audio uploaded and segmented successfully'); exit; // Optionally, you can return a response indicating success
    }

    private function segmentAudio($inputFile, $outputDirectory)
    { 
        $ffmpeg   = FFMpeg\FFMpeg::create(); 
        $audio    = $ffmpeg->open($inputFile); 
        $duration = $audio->getStreams()->first()->get('duration'); 
        $segmentDuration = 20;  
        $chunks = ceil($duration / $segmentDuration); 
        for ($i = 0; $i < $chunks; $i++) { 
            $start      = $i * $segmentDuration; 
            $duration_g = min($segmentDuration, $duration - $start); //
            $audio->filters()->clip(TimeCode::fromSeconds($start),TimeCode::fromSeconds($duration_g));
            $audio->save(new FFMpeg\Format\Audio\Mp3(),$outputDirectory.'/'.$i.'.mp3');
        }
    }

    // public function exampledata(){ 
    //     $result= {"cost_time":3.1119999885559,"result_type":0,
    //             "metadata":{
    //                         "music":[
    //                                     {
    //                                         "label":"Epidemic Sound",
    //                                         "external_ids":{"isrc":"SE5Q51809157","upc":"7330178014015"},
    //                                         "artists":[{"name":"Bireli Snow"}],
    //                                         "release_date":"2013-07-05",
    //                                         "result_from":1,
    //                                         "external_metadata":{
    //                                             "spotify":{"track":{"name":"Sunday Smile","id":"4fYU2vroolTXOXyjJy8JbH"},
    //                                             "artists":[{"name":"Bireli Snow","id":"2snEUaL76Gy0Fda95DZyFT"}],
    //                                             "album":{"name":"Summer Rain","id":"54v7nWtbGq1GS8wtCYEvtb"}}
    //                                             },
    //                                         "genres":[{"name":"Alternative"}],
    //                                         "sample_end_time_offset_ms":12000,
    //                                         "db_end_time_offset_ms":25920,
    //                                         "duration_ms":58750,
    //                                         "db_begin_time_offset_ms":14160,
    //                                         "acrid":"4579d8069ea98aa0dab21c7c3d1411e4",
    //                                         "sample_begin_time_offset_ms":0,
    //                                         "title":"Sunday Smile",
    //                                         "play_offset_ms":25900,
    //                                         "album":{"name":"Summer Rain"},
    //                                         "language":"en",
    //                                         "score":31
    //                                     }
    //                                 ],
    //                         "timestamp_utc":"2024-02-16 10:57:40"
    //                 },
    //                 "status":{"msg":"Success","code":0,"version":"1.0"}
    //         };
    //     }

    // {"status":{"msg":"No result","code":1001,"version":"1.0"}}  //when not match audio
 public function resultAcr()
{
    $responce = '{
        "status":{"msg":"Success","code":0,"version":"1.0"},
        "result_type":0,
        "metadata":{
                        "music":[{
                                    "label":"I LOVE ISLAM OFFICIAL",
                                    "external_metadata":{
                                                            "deezer":{
                                                                        "track":{"name":"Ye Zameen Jab Na Thi","id":"2676354972"},
                                                                        "artists":[{"name":"Fatima Noor","id":"151952362"}],
                                                                        "album":{"name":"Ye Zameen Jab Na Thi","id":"552006452"}
                                                                    }
                                                        },
                                    "artists":[
                                                {
                                                    "name":"Fatima Noor",
                                                    "id":"beb327b947f7e3db2700"
                                                }
                                            ],
                                    "release_date":"2024-02-21",
                                    "duration_ms":341500,
                                    "external_ids":{"isrc":"QM3DF2498564","upc":"1963622335471"},
                                    "acrid":"a552c77e5d95fc0cf288199f23431953",
                                    "title":"Ye Zameen Jab Na Thi",
                                    "play_offset_ms":14700,
                                    "result_from":1,
                                    "album":{"name":"Ye Zameen Jab Na Thi"},
                                    "score":100
                                }],
                       "timestamp_utc":"2024-02-26 07:10:46"
                   },
        "cost_time":1.8320000171661
    }';
    $flg = json_decode($responce);
    // print_r($flg->status);  
    print_r($flg->metadata->music[0]->label); echo '---label-----';
    print_r($flg->metadata->music[0]->title); echo '---title---';
    print_r($flg->metadata->music[0]->album->name); echo '---album-----'; 
    print_r($flg->metadata->music[0]->release_date);  echo '----release_date -----';
    exit;
    # code...
}

}
