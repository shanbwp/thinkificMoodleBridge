<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Auth;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = BlogCategory::get();
      return view('admin.category.index',compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog = BlogCategory::get();
        return view('admin.category.create',compact('blog'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new BlogCategory();
        $input = $request->all();
        if ($file = $request->file('image'))
         {
            $name = time().str_replace(' ', '', $file->getClientOriginalName());
            $file->move('assets/images/category/',$name);
            $input['image'] = $name;
        }
        $data->fill($input)->save();
        return redirect()->route('category-list');     
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
        $data = BlogCategory::findOrFail($id);
        return view('admin.category.edit',compact('data'));

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
        $data = BlogCategory::findOrFail($id);
        $input = $request->all();
       if ($file = $request->file('image'))
            { 
                $name = time().str_replace(' ', '', $file->getClientOriginalName());
                $file->move('assets/images/category/',$name);
                if($data->image != null)
                {
                    if (file_exists(public_path().'/assets/images/category/'.$data->image)) {
                        unlink(public_path().'/assets/images/category/'.$data->image);
                    }
                }
            $input['image'] = $name;
            }
            $data->update($input);
            return redirect()->route('category-list'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $farming
     * @return \Illuminate\Http\Response
     */
    
        public function destroy($id)
        {
            $data = BlogCategory::findOrFail($id);
           
            //If Photo Doesn't Exist
            if($data->image == null){
                $data->delete();
                //--- Redirect Section     
                $msg = 'Data Deleted Successfully.';
                
                //--- Redirect Section Ends     
            }else
            {
                if (file_exists(public_path().'/assets/images/category/'.$data->image)) {
                    unlink(public_path().'/assets/images/category/'.$data->image);
                }
                $data->delete();
                $msg = 'Data Deleted Successfully.';
            } 

         return redirect()->route('category-list');       
        }
       
       
    
}
