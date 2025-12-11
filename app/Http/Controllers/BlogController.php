<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Blog::get();
      return view('admin.blog.index',compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog = Blog::get();
        return view('admin.blog.create',compact('blog'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Blog();
        $input = $request->all();
        $input['slug'] = str_replace(" ", "-", $input['slug']);
        if ($file = $request->file('image'))
         {
            $name = time().str_replace(' ', '', $file->getClientOriginalName());
            $file->move('assets/images/blog/',$name);
            $input['image'] = $name;
        }
        $data->fill($input)->save();
        return redirect()->route('blog-list');     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $farming
     * @return \Illuminate\Http\Response
     */
    public function show( )
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
        $data = Blog::findOrFail($id);
        return view('admin.blog.edit',compact('data'));

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
        $data = Blog::findOrFail($id);
        $input = $request->all();
        $input['slug'] = str_replace(" ", "-", $input['slug']);
       if ($file = $request->file('image'))
            { 
                $name = time().str_replace(' ', '', $file->getClientOriginalName());
                $file->move('assets/images/blog/',$name);
                if($data->image != null)
                {
                    if (file_exists(public_path().'/assets/images/blog/'.$data->image)) {
                        unlink(public_path().'/assets/images/blog/'.$data->image);
                    }
                }
            $input['image'] = $name;
            }
            $data->update($input);
            return redirect()->route('blog-list'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $farming
     * @return \Illuminate\Http\Response
     */
    
        public function destroy($id)
        {
            $data = Blog::findOrFail($id);
           
            //If Photo Doesn't Exist
            if($data->image == null){
                $data->delete();
                //--- Redirect Section     
                $msg = 'Data Deleted Successfully.';
                
                //--- Redirect Section Ends     
            }else
            {
                if (file_exists(public_path().'/assets/images/blog/'.$data->image)) {
                    unlink(public_path().'/assets/images/blog/'.$data->image);
                }
                $data->delete();
                $msg = 'Data Deleted Successfully.';
            } 

         return redirect()->route('blog-list');       
        }
        public function userBlog()
        {
            $userBlog = Blog::get();
            return view('front.blog',compact('userBlog'));
        }
       
    
}
