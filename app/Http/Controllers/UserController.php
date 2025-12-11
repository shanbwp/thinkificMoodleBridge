<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Track;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


use Carbon\Carbon;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function accountUser()
    {
        $results = User::get();
        Auth('user')->user('name');
        return view('user.account', compact('results'));
    }

    public function index()
    { 
         $results = User::get();  
        return view('admin.user.index', compact('results')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        if ($file = $request->file('image')) {
            $name = time() . str_replace(' ', '', $file->getClientOriginalName());
            $file->move('assets/images/user', $name);
            $input['image'] = $name;
        }

        $input['password'] = Hash::make($input['password']);
        $result = User::create($input); 
        return redirect()->back();
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $farming
     * @return \Illuminate\Http\Response
     */
    public function show($category)
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
        $data = User::findOrFail($id);
        return view('admin.user.edit', compact('data'));
    }
    public function Detail($id)
    {
        $data = User::findOrFail($id);
        return view('admin.user.detail', compact('data'));
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
        $data = User::findOrFail($id);
        $input = $request->all();
        if ($file = $request->file('image')) {
            $name = time() . str_replace(' ', '', $file->getClientOriginalName());
            $file->move('assets/images/user', $name);
            if ($data->image != null) {
                if (file_exists(public_path() . '/assets/images/user/' . $data->image)) {
                    unlink(public_path() . '/assets/images/user/' . $data->image);
                }
            }
            $input['image'] = $name;
        }

        $data->update($input);
        return redirect()->route('user-list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $farming
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $data = User::findOrFail($id);

        //If Photo Doesn't Exist
        if ($data->image == null) {
            $data->delete();
            $msg = 'Data Deleted Successfully.';
        } else {
            if (file_exists(public_path() . '/assets/images/user/' . $data->image)) {
                unlink(public_path() . '/assets/images/user/' . $data->image);
            }
            $data->delete();
            $msg = 'Data Deleted Successfully.';
        }

        return redirect()->route('user-list');
    }
    public function accountUpdate(Request $request, $id)
    {
        $data = User::findOrFail($id);
        $request->validate([
            'password' => ['required'],
            'confirm_password' => ['same:new_password'],
        ]);

        $input = $request->all();
        $input['password'] =  Hash::make($request->password);
        $data->update($input);
        return redirect()->back();
    }


    public function track($id)
    {
         $results = Track::where('user_id', $id)->get();
         return view('admin.track.index', compact('results'));
    }

    public function album($id)
    {
        $results = Album::where('user_id', $id)->get();
        return view('admin.album.index', compact('results'));
    }
}
