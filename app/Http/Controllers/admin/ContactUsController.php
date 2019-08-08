<?php

namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ContactUs;

class ContactUsController extends Controller
{
    public function index()
    {
        $contact_us=ContactUs::ALL();
        return view('admin.contact.index',compact('contact_us'));
    }
    public function create()
    {
        return  view('admin.contact.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'hc_name'=>'required',
            'hc_email'=>'required',
            'hc_message'=>'required',
            'hc_ip'=>'required',
        ]);
        $contact_us=new ContactUs();
        $contact_us->hc_name=$request->hc_name;
        $contact_us->hc_email=$request->hc_email;
        $contact_us->hc_message=$request->hc_message;
        $contact_us->hc_ip=$request->hc_ip;
        $contact_us->save();
        return view('admin.dashboard');

    }
}
