<?php

namespace App\Http\Controllers;

use App\Models\Track;
use App\Models\Generation;
use App\Models\Album;
use Illuminate\Http\Request;
use Auth;
use File;
use Illuminate\Support\Facades\Storage;
use duncan3dc\MetaAudio\Tagger;
use Toastr;

class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uid = auth('user')->user()->id;
        if ($uid) {
            $results = Track::where('user_id', $uid)->where('status','pending')->get();
        } else {
            $results = Track::get()->where('status','pending');
        }

        return view('user.track.index', compact('results'));
    }

    public function trackSubmitList()
    {
        $uid = auth('user')->user()->id;
        if ($uid) {
            $results = Track::where('user_id', $uid)->get();
        } else {
            $results = Track::get();
        }

        return view('user.album.albumtrack', compact('results')); 
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $generies = Generation::get();
        return view('user.album.trackindex', compact('generies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Track();
        $input = $request->all(); 
        $input['user_id'] = auth('user')->user()->id;
        $data->fill($input)->save();
        if ($file = $request->file('myfile')) {
            // $name = time() . str_replace(' ', '', $file->getClientOriginalName());$file->getClientOriginalExtension();
            $name = $data->id.'.'.$file->getClientOriginalExtension();
            $file->move('assets/images/track/', $name); 
            $data->update(['voice'=>$name]);
        }

        
        // print_r($data); exit;
        return redirect()->route('track-list');
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
    public function Album($id)
    {
        $data = Track::findOrFail($id);
        return view('user.track.trackedit', compact('data'));
    }
    public function edit($id)
    {
        $data = Track::findOrFail($id);
        $generies = Generation::get();
        return view('user.track.trackedit', compact('data', 'generies'));
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
        $data = Track::findOrFail($id);
        $input = $request->all();
        // print_r($input); exit; 
        $this->validate($request, $data->rules(),$data->messages());
        $data->update($input);
        return redirect()->route('track-list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $farming
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $data = Track::findOrFail($id);

        //If Photo Doesn't Exist
        if ($data->image == null) {
            $data->delete();
            //--- Redirect Section     
            $msg = 'Data Deleted Successfully.';

            //--- Redirect Section Ends     
        } else {
            if (file_exists(public_path() . '/assets/images/track/' . $data->image)) {
                unlink(public_path() . '/assets/images/track/' . $data->image);
            }
            $data->delete();
            $msg = 'Data Deleted Successfully.';
        }

        return redirect()->route('track-list');
    }
    
    public function adminEdit($id)
    {
        $data = Track::findOrFail($id);
        $generies = Generation::get();
        return view('admin.track.trackedit', compact('data', 'generies'));
    }

    public function adminUpdate(Request $request, $id)
    {
        $data = Track::findOrFail($id);
        $input = $request->all();
        if ($file = $request->file('image')) {
            $name = time() . str_replace(' ', '', $file->getClientOriginalName());
            $file->move('assets/images/track/', $name);
            if ($data->image != null) {
                if (file_exists(public_path() . '/assets/images/track/' . $data->image)) {
                    unlink(public_path() . '/assets/images/track/' . $data->image);
                }
            }
            $input['image'] = $name;
        }
        $data->update($input);
        return redirect()->route('admin-track-list');
    }

    public function userSubmitTrack()
    {
        $results = Track::where('status', '1')->get();
        return view('user.album.albumtrack', compact('results'));
    }

    public function adminIndex()
    {
        $results = Track::where('status','submit')->get();  
        return view('admin.track.pendingtrack', compact('results'));
    }


    public function adminTrackIndex()
    {
        $results = Track::get();
        
        return view('admin.album.albumtrack', compact('results'));
    }

    public function adminTrackSubmitted()
    {
        // $results = Track::whereNotNull('genre')->get();         
        $results = Track::where('status','approved')->orWhere('status','publish')->get();         
        Toastr::success('Tracks ready for Adrev Submition ', 'Success', ["positionClass" => "toast-top-center"]); 
        return view('admin.submitted.track', compact('results'));
    }

    public function adminDestroy($id)
    {
        $data = Track::findOrFail($id); 
        if ($data->image == null) {
            $data->delete();   
            $msg = 'Data Deleted Successfully.';    
        } else {
            if (file_exists(public_path() . '/assets/images/track/' . $data->image)) {
                unlink(public_path() . '/assets/images/track/' . $data->image);
            }
            $data->delete();
            $msg = 'Data Deleted Successfully.';
        }

        return redirect()->route('admin-track-list');
    }

    public function adminTrackExport($ids)
    {
        $track = Track::findOrFail($ids);
        // $tagger = new Tagger;
        // $tagger->addDefaultModules();
        // $mp3 = $tagger->open("assets/images/track/" . $track->voice);
        // // set tags 
        // $mp3->setArtist($track->id);
        // $mp3->setAlbum("Album Kezia");
        // $mp3->setYear(2005);
        // $mp3->setTrackNumber(1);
        // $mp3->setTrackCode("11");
        // $mp3->setTrackLabel("label g ");
        // $mp3->setTitle("title No Stars Over Bethlehem");
        // $mp3->save();
        // dd($mp3);
        // print_r($mp3);
        //  exit;
        // echo "Artist: {$mp3->getArtist()}\n";
        // echo "Album: {$mp3->getAlbum()}\n";
        // echo "Year: {$mp3->getYear()}\n";
        // echo "Track No: {$mp3->getTrackNumber()}\n";
        // echo "Track No: {$mp3->getTrackCode()}\n"; 
        // echo "Title: {$mp3->getTitle()}\n";
        // exit;
        //$track     = Track::whereIn('id',$ids)->get();
        $localFile = File::get('assets/images/track/' . $track->voice);
        //    // print_r($localFile); exit;
        Storage::disk('custom-ftp')->put($track->voice, $localFile);
        
        Toastr::success('Trak Submitted on adrev  ', 'Success', ["positionClass" => "toast-top-center"]); 
        return redirect()->back();
    }

    public function UserTrackSubmit(Request $request)
    { 
        $input = $request->all();
        if ($input['trackIds']) {
            $data = Track::whereIn('id',$input['trackIds'])->update(['submitted_at'=>date('d-m-y') , 'status'=>'submit']); 
            Toastr::success('Tracks Submite for Approvel', 'Success', ["positionClass" => "toast-top-center"]); 
        }
         
        return redirect()->route('track-list');
    }
    public function UserTrackSubmitAll(Request $request)
    { 
        $input = $request->all();
        if ($input['trackIds']) {
            $data = Track::whereIn('id',$input['trackIds'])->update(['submitted_at'=>date('d-m-y') , 'status'=>'submit']); 
            Toastr::success('Tracks Submite for Approvel', 'Success', ["positionClass" => "toast-top-center"]); 
        }
         
        return redirect()->route('track-list');
    }
    
    public function UserTrackDelete(Request $request)
    { 
        $input = $request->all();
        if ($input['trackIds']) {
            $data = Track::whereIn('id',$input['trackIds'])->delete(); 
            Toastr::success('Tracks Deleted ', 'Success', ["positionClass" => "toast-top-center"]); 
        }
      
        return redirect()->route('track-list');
    }

    public function adminTrackSubmit(Request $request)
    { 
        $input = $request->all();
        if ($input['trackIds']) {
            $data = Track::whereIn('id',$input['trackIds'])->update(['submitted_at'=>date('d-m-y') , 'status'=>'approved']); 
            Toastr::success('Tracks Approved', 'Success', ["positionClass" => "toast-top-center"]); 
        }
        
        return redirect()->route('admin-track-list');
    }
    
    
    public function adminTrackDelete(Request $request)
    { 
        $input = $request->all();
        if ($input['trackIds']) {
            $data = Track::whereIn('id',$input['trackIds'])->delete(); 
            Toastr::success('Tracks Deleted ', 'Success', ["positionClass" => "toast-top-center"]); 
        }
        
        return redirect()->route('admin-track-list');
    }

    public function adminTrackSubmitAdrev(Request $request)
    {
        $input = $request->all();
        // print_r($input); exit;
        $tracks = Track::whereIn('id',$input['trackIds'])->get();
         foreach($tracks as $track){
            $localFile = File::get('assets/images/track/' . $track->voice); 
            Storage::disk('custom-ftp')->put($track->voice, $localFile);
            $track->update(['status'=>'publish']);
         }
        
        
        Toastr::success('Tracks Submitted on adrev  ', 'Success', ["positionClass" => "toast-top-center"]); 
        return redirect()->back();
    }
}
