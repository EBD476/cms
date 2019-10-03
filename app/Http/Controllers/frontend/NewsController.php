<?php

namespace App\Http\Controllers\frontend;

use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index()
    {
        $news=News::all();
        return view('frontend.news.show',compact('news'));
    }
}
