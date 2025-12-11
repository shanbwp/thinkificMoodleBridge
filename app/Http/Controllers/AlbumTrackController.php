<?php

namespace App\Http\Controllers;

use App\Models\AlbumTrack;
use App\Models\Album;
use Illuminate\Http\Request;

class AlbumTrackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function index($id)
    { 
        $results = AlbumTrack::where('album_id',$id)->get(); 
        return view('admin.track.index',compact('results','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response 
     */
    public function store(Request $request )
    {
        $data = new AlbumTrack();
        $input = $request->all();
        if ($file = $request->file('myfile'))
         {
            $name = time().str_replace(' ', '', $file->getClientOriginalName());
            $file->move('assets/images/albumtrack/',$name);
            $input['name'] = $name;
            $image= $request->file('myfile');
            $fullName=$image->getClientOriginalName();
            $title=explode('.',$fullName)[0];
            $input['track_title'] = $title;

        }

        //print_r($input); exit;
        $data->fill($input)->save();
        return redirect()->route('album-track',['id'=>$input['album_id']]);     
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AlbumTrack  $albumTrack
     * @return \Illuminate\Http\Response
     */
    public function show(AlbumTrack $albumTrack)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AlbumTrack  $albumTrack
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = AlbumTrack::findOrFail($id);
        return view('user.album.albumtrackedit',compact('data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AlbumTrack  $albumTrack
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = AlbumTrack::findOrFail($id);
        $input = $request->all();
       if ($file = $request->file('myfile'))
            { 
                $name = time().str_replace(' ', '', $file->getClientOriginalName());
                $file->move('assets/images/album/',$name);
                if($data->image != null)
                {
                    if (file_exists(public_path().'/assets/images/albumtrack/'.$data->image)) {
                        unlink(public_path().'/assets/images/albumtrack/'.$data->image);
                    }
                }
            $input['name'] = $name;
            }
            $data->update($input);
            return redirect()->route('album-track',['id'=>$data['album_id']]); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AlbumTrack  $albumTrack
     * @return \Illuminate\Http\Response
     */
    public function destroy($album_id,$id)
    {
        $data = AlbumTrack::where('album_id',$album_id)->where('id',$id)->first();  
        if ($data->segment_id != null) { 
            if (file_exists(public_path() . '/assets/file_segments/' . $data->segment_id.'mp3')) {
                unlink(public_path() . '/assets/file_segments/' . $data->segment_id.'mp3');
            }  
        }

        $data->delete();
        return redirect()->route('file-segment-list',$album_id);
    } 

    public function adminAlbumTrack($id)
    {
        $album   = Album::find($id);
        $results = AlbumTrack::where('album_id',$id)->get();
        return view('admin.album.albumtrack',compact('results','id','album')); 
    }
   

}
