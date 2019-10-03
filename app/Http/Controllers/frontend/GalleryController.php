<?php

namespace App\Http\Controllers\frontend;

use App\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function index()
    {
        $image=Gallery::all();
        return view('frontend.gallery.show',compact('image'));
    }
}
