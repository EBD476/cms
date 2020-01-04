<?php

namespace App\Http\Controllers\frontend;

use App\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    public function show(){
        $video = Video::all();
        return view('frontend.video.test',compact('video'));
    }
}
