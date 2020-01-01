<?php

namespace App\Http\Controllers\admin;

use App\Product;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product:: all();
        return view('admin.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
//            'hp_product_name' => 'required' ,
//            'hp_product_model' => 'required' ,
//            'hp_product_image' => 'required|mimes:jpg,jpeg,png,bmp' ,
//            'hp_product_description' => 'required' ,
//            'hp_product_publish_date' => 'required' ,
//            'hp_product_status' => 'required' ,
        ]);
//        $image = $request->file('hp_product_image');
//        $slug = str_slug($request->hp_product_image);
//        if(isset($image))
//        {
//            $currentdate = Carbon::now()->todatestring();
//            $imagename = $slug . '-' . $currentdate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
//            if (!file_exists('upload/product')) {
//                mkdir('upload/product', 0777, true);
//            }
//            $image->move('upload/product', $imagename);
//        }
//        else
//        {
//            $imagename='default.png';
//        }
        $product = new Product();
        $product->hp_product_name = $request->hp_product_name;
        $product->hp_product_model = $request->hp_product_model;
        $product->hp_product_image = $request->hp_product_image;
        $product->hp_product_description = $request->hp_product_description;
        $product->hp_product_publish_date = $request->hp_product_publish_date;
        if($request->status == 'on'){
            $product->hp_product_status = 1;
        }else{
            $product->hp_product_status = 0;
        }

        $product->save();
        return json_encode(["response" => "Done"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /**
         *
         */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
//            'hp_product_name' => 'required' ,
//            'hp_product_model' => 'required' ,
//            'hp_product_image' => 'required|mimes:jpg,jpeg,png,bmp' ,
//            'hp_product_price'=> 'required',
//            'hp_product_description' => 'required' ,
//            'hp_product_publish_date' => 'required' ,
//            'hp_product_status' => 'required' ,

        ]);
//        $image = $request -> file('hp_product_image');
//        $slug = str_slug($request->hp_product_image);
        $product = Product::find($id);
//        if(isset($image)) {
//            $currentdate = Carbon::now()->todatestring();
//            $imagename = $slug . '-' . $currentdate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
//            if (!file_exists('upload/product')) {
//                mkdir('upload/product', 0777, true);
//            }
//            $image->move('upload/product', $imagename);
//        }
//        else{
//            $imagename='default.png';
//        }
        $product->hp_product_name = $request->hp_product_name;
        $product->hp_product_model = $request->hp_product_model;
        $product->hp_product_image = $request->hp_product_image;
        $product->hp_product_description = $request->hp_product_description;
        $product->hp_product_publish_date = $request->hp_product_publish_date;
        $product->hp_product_status = $request->hp_product_status == 'on' ? 1 : 0;
        $product->save();
        return json_encode(["response" => "Done"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
//        if (file_exists('upload/product/' . $product->image)) {
//
//            unlink('upload/product/' . $product->image);
//
//        }
        $product->delete();
        return json_encode(["response" => "Done"]);
    }

    public function product_upload(Request $request)
    {
        $image = $request->file('file');
        $filename = $_FILES['file']['name'];

        if (isset($image)) {
            $current_date = Carbon::now()->todatestring();
//          $image_name = $current_date . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            if (!file_exists('img/product')) {
                mkdir('img/product', 0777, true);
            }
            $image->move('img/product', $filename);
        } else {
            $image_name = 'default.png';
        }
        return response()->json([
            'link' => '/img/news/' . $filename
        ]);
    }
        public function product_status(Request $request)
    {
        $sataus = Product::find($request->id);
        $sataus->hp_product_status = $request->status;
        $sataus->save();
        return json_encode(["response" => "Done"]);
    }
//

}
