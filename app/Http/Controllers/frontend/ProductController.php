<?php

namespace App\Http\Controllers\frontend;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{

    public function index()
    {
        $product2=Product::ALL();
        $product=Product::ALL();
        return view('frontend.product.index',compact('product','product2'));
    }
}
