<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function update(Request $request)
    {
        $data = Setting::findOrFail(1);
        $input = $request->all();
       if ($file = $request->file('fav_icon'))
            {
                $name = mt_rand().time().str_replace(' ', '', $file->getClientOriginalName());
                $file->move('assets/images/setting',$name);
                if($data->fav_icon != null)
                {
                    if (file_exists(public_path().'/assets/images/setting/'.$data->fav_icon)) {
                        unlink(public_path().'/assets/images/setting/'.$data->fav_icon);
                    }
                }
            $input['fav_icon'] = $name;
            }
            if ($file = $request->file('logo'))
            {
                $name = mt_rand().time().str_replace(' ', '', $file->getClientOriginalName());
                $file->move('assets/images/setting',$name);
                if($data->logo != null)
                {
                    if (file_exists(public_path().'/assets/images/setting/'.$data->logo)) {
                        unlink(public_path().'/assets/images/setting/'.$data->logo);
                    }
                }
            $input['logo'] = $name;
            }
            if ($file = $request->file('white_logo'))
            {
                $name = mt_rand().time().str_replace(' ', '', $file->getClientOriginalName());
                $file->move('assets/images/setting',$name);
                if($data->white_logo != null)
                {
                    if (file_exists(public_path().'/assets/images/setting/'.$data->white_logo)) {
                        unlink(public_path().'/assets/images/setting/'.$data->white_logo);
                    }
                }
            $input['white_logo'] = $name;
            }
            $data->update($input);
            return redirect()->route('setting-logo-edit'); 
    }

//SEO Setting
    public function SEO()
    {
       // echo "yes"; exit;
        $data = Setting::findOrFail(1);
        return view('admin.settings.seosetting',compact('data'));
    }

    public function SEOupdate(Request $request)
    {
        $data = Setting::findOrFail(1);
        $input = $request->all();
            $data->update($input);
            return redirect()->back();  
    }

   

    
 
 

    public function socialEdit()
    {
       // echo "yes"; exit;
        $data = Setting::findOrFail(1);
        return view('admin.settings.sociallinks',compact('data'));
    }

    public function socialUpdate(Request $request,$id)
    {
        $data = Setting::findOrFail($id);
        $input = $request->all();
            $data->update($input);
            return redirect()->route('setting-social-link-edit'); 
    }
    public function edit()
    {
        $data = Setting::find(1); 
        return view('admin.settings.logosetting',compact('data'));
    }

 
}
