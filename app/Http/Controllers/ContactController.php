<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $results = Contact::get();
        return view('admin.contact.index',compact('results'));
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
    public function store(Request $request)
    { 
        $data = new Contact();
        $input = $request->all();
        //print_r($input); exit;
        $data->fill($input)->save(); 
        return redirect()->back();    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Contact::findOrFail($id);
        return view('admin.contact.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Contact::findOrFail($id);
        $input = $request->all();
       if ($file = $request->file('image'))
            {
                $name = time().str_replace(' ', '', $file->getClientOriginalName());
                $file->move('assets/images/contact',$name);
                if($data->image != null)
                {
                    if (file_exists(public_path().'/assets/images/contact/'.$data->image)) {
                        unlink(public_path().'/assets/images/contact/'.$data->image);
                    }
                }
            $input['image'] = $name;
            }
            $data->update($input);
            return redirect()->route('contact-list'); 
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Contact::findOrFail($id);
           
        //If Photo Doesn't Exist
        if($data->image == null){
            $data->delete();
            //--- Redirect Section     
            $msg = 'Data Deleted Successfully.';
            
            //--- Redirect Section Ends     
        }else
        {
            if (file_exists(public_path().'/assets/images/contact/'.$data->image)) {
                unlink(public_path().'/assets/images/contact/'.$data->image);
            }
            $data->delete();
            $msg = 'Data Deleted Successfully.';
        } 

     return redirect()->route('contact-list');       
    }
}
