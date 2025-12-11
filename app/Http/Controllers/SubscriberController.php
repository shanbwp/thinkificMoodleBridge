<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use Auth;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Subscriber::get();
      return view('admin.subscriber.index',compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog = Subscriber::get();
        return view('admin.subscriber.create',compact('blog'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Subscriber();
        $input = $request->all(); 
        $data->fill($input)->save();
        return redirect()->back();     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $farming
     * @return \Illuminate\Http\Response
     */
    public function show( $category)
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
        $data = Subscriber::findOrFail($id);
        return view('admin.subscriber.edit',compact('data'));

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
        $data = Subscriber::findOrFail($id);
        $input = $request->all();
            $data->update($input);
            return redirect()->route('subscriber-list'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $farming
     * @return \Illuminate\Http\Response
     */
    
        public function destroy($id)
        {
            $data = Subscriber::findOrFail($id); 
                $data->delete();    
                $msg = 'Data Deleted Successfully.'; 

         return redirect()->route('subscriber-list');       
        }
        public function Subscriber()
        {
            $subscriber = Subscriber::get();
            return view('front.subscriber',compact('subscriber'));
        }
       
    
}
