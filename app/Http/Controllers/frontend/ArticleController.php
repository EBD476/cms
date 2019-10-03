<?php

namespace App\Http\Controllers\frontend;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index()
    {
        $article=Article::all();
        return view('frontend.article.show',compact('article'));
    }
}
