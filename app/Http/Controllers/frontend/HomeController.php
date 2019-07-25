<?php

namespace App\Http\Controllers\frontend;
use App\Menu;
use App\Product;
use App\Project;
use App\Setting;
use App\slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus   = Menu::ALL();
        $slider  = slider::all();
        $product = Product::all();
        $project = Project::all();
        $setting = Setting::all();
        return view('frontend.welcome',compact('slider','product','project','setting','menus'));
    }
}
