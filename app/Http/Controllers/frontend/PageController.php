<?php

namespace App\Http\Controllers\frontend;
use App\hnt_pages;
use App\Menu;
use App\Pages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index($page){

       $page = Pages::where('title',$page)->first();

       return view('frontend.pages.test', compact('page'));

    }


}
