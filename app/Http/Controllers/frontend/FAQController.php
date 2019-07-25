<?php

namespace App\Http\Controllers\frontend;
use App\FAQ;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class FAQController extends Controller
{
    public function index()
    {

        $faq= FAQ::all();
        $counter= FAQ::all();
        return view('frontend.faq.index',compact('counter','faq'));
    }

}
