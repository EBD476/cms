<?php

namespace App\Http\Controllers\admin;

use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use carbon\carbon;

class SettingController extends Controller
{
    public function create()
    {
        $setting=Setting::find($id=1);
        return view('admin.setting.edit',compact('setting'));
    }
//    public function store(Request $request)
//    {
//        $this->validate($request,[
//            'logo' =>'required|mimes:jpg,jpeg,png,bmp',
//            'favicon'=>'required|mimes:jpg,jpeg,png,bmp',
//            'seo_title'=>'required',
//            'seo_keyword'=>'required',
//            'seo_description'=>'required',
//            'company_contact'=>'required',
//            'company_address'=>'required',
//            'from_name'=>'required',
//            'from_email'=>'required',
//            'facebook'=>'required',
//            'linkedin'=>'required',
//            'twitter'=>'required',
//            'google'=>'required',
//            'copyright_text'=>'required',
//            'footer_text'=>'required',
//            'terms'=>'required',
//            'disclaimer'=>'required',
//            'google_analytics'=>'required',
//        ]);
//        $logo = $request->file('logo');
//        $slug = str_slug($request->logo);
//        if(isset($logo))
//        {
//            $current_date = Carbon::now()->todatestring();
//            $logo_name = $slug . '-' . $current_date . '-' . uniqid() . '.' . $logo->getClientOriginalExtension();
//            if (!file_exists('upload/setting/logo')) {
//                mkdir('upload/setting/logo', 0777, true);
//            }
//            $logo->move('upload/setting/logo', $logo_name);
//        }
//        else
//        {
//            $logo_name='default.png';
//        }
//        $favicon = $request->file('favicon');
//        $slug = str_slug($request->favicon);
//        if(isset($favicon))
//        {
//            $current_date = Carbon::now()->todatestring();
//            $favicon_name = $slug . '-' . $current_date . '-' . uniqid() . '.' . $favicon->getClientOriginalExtension();
//            if (!file_exists('upload/setting/favicon')) {
//                mkdir('upload/setting/favicon', 0777, true);
//            }
//            $favicon->move('upload/setting/favicon', $favicon_name);
//        }
//        else
//        {
//            $favicon_name='default.png';
//        }
//        $setting = new Setting();
//        $setting->logo=$logo_name;
//        $setting->favicon=$favicon_name;
//        $setting->seo_title= $request->seo_title;
//        $setting->seo_keyword= $request->seo_keyword;
//        $setting->seo_description= $request->seo_description;
//        $setting->company_contact= $request->company_contact;
//        $setting->company_address= $request->company_address;
//        $setting->from_name= $request->from_name;
//        $setting->from_email= $request->from_email;
//        $setting->facebook= $request->facebook;
//        $setting->linkedin= $request->linkedin;
//        $setting->twitter= $request->twitter;
//        $setting->google= $request->google;
//        $setting->copyright_text= $request->copyright_text;
//        $setting->footer_text= $request->footer_text;
//        $setting->terms= $request->terms;
//        $setting->disclaimer= $request->disclaimer;
//        $setting->google_analytics= $request->google_analytics;
//        $setting->save();
//        return redirect()->route('setting.create');
//
//    }
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'logo' =>'required|mimes:jpg,jpeg,png,bmp',
            'favicon'=>'required|mimes:jpg,jpeg,png,bmp',
            'hnt_setting_image_header'=>'required|mimes:jpg,jpeg,png,bmp',
            'seo_title'=>'required',
            'seo_keyword'=>'required',
            'seo_description'=>'required',
            'company_contact'=>'required',
            'company_address'=>'required',
            'from_name'=>'required',
            'from_email'=>'required',
            'facebook'=>'required',
            'linkedin'=>'required',
            'twitter'=>'required',
            'google'=>'required',
            'copyright_text'=>'required',
            'footer_text'=>'required',
            'terms'=>'required',
            'disclaimer'=>'required',
            'google_analytics'=>'required',
        ]);
        $setting=Setting::find($id);
        $logo = $request->file('logo');
        $slug = str_slug($request->logo);
        if(isset($logo))
        {
            $current_date = Carbon::now()->todatestring();
            $logo_name = $slug . '-' . $current_date . '-' . uniqid() . '.' . $logo->getClientOriginalExtension();
            if (!file_exists('upload/setting/logo')) {
                mkdir('upload/setting/logo', 0777, true);
            }
            $logo->move('upload/setting/logo', $logo_name);
        }
        else
        {
            $logo_name='default.png';
        }
        $favicon = $request->file('favicon');
        $slug = str_slug($request->favicon);
        if(isset($favicon))
        {
            $current_date = Carbon::now()->todatestring();
            $favicon_name = $slug . '-' . $current_date . '-' . uniqid() . '.' . $favicon->getClientOriginalExtension();
            if (!file_exists('upload/setting/favicon')) {
                mkdir('upload/setting/favicon', 0777, true);
            }
            $favicon->move('upload/setting/favicon', $favicon_name);
        }
        else
        {
            $favicon_name='default.png';
        }
        $header = $request->file('hnt_setting_image_header');
        $slug = str_slug($request->hnt_setting_image_header);
        if(isset($header))
        {
            $current_date = Carbon::now()->todatestring();
            $header_name = $slug . '-' . $current_date . '-' . uniqid() . '.' . $header->getClientOriginalExtension();
            if (!file_exists('upload/setting/header')) {
                mkdir('upload/setting/header', 0777, true);
            }
            $header->move('upload/setting/header', $header_name);
        }
        else
        {
            $header_name='default.png';
        }
        $setting->logo=$logo_name;
        $setting->favicon=$favicon_name;
        $setting->hnt_setting_image_header=$header_name;
        $setting->seo_title= $request->seo_title;
        $setting->seo_keyword= $request->seo_keyword;
        $setting->seo_description= $request->seo_description;
        $setting->company_contact= $request->company_contact;
        $setting->company_address= $request->company_address;
        $setting->from_name= $request->from_name;
        $setting->from_email= $request->from_email;
        $setting->facebook= $request->facebook;
        $setting->linkedin= $request->linkedin;
        $setting->twitter= $request->twitter;
        $setting->google= $request->google;
        $setting->copyright_text= $request->copyright_text;
        $setting->footer_text= $request->footer_text;
        $setting->terms= $request->terms;
        $setting->disclaimer= $request->disclaimer;
        $setting->google_analytics= $request->google_analytics;
        $setting->save();
        return redirect()->route('admin.dashboard');

    }
}
