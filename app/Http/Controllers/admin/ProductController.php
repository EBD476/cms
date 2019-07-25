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
        return view('admin.product.index',compact('product'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'hp_product_name' => 'required' ,
            'hp_product_model' => 'required' ,
            'hp_product_image' => 'required|mimes:jpg,jpeg,png,bmp' ,
            'hp_product_price'=> 'required',
            'hp_product_description' => 'required' ,
            'hp_product_publish_date' => 'required' ,
            'hp_product_status' => 'required' ,
        ]);
        $image = $request->file('hp_product_image');
        $slug = str_slug($request->hp_product_image);
        if(isset($image))
        {
            $currentdate = Carbon::now()->todatestring();
            $imagename = $slug . '-' . $currentdate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            if (!file_exists('upload/product')) {
                mkdir('upload/product', 0777, true);
            }
            $image->move('upload/product', $imagename);
        }
        else
        {
            $imagename='default.png';
        }
            $product = new Product();
            $product->hp_product_name= $request->hp_product_name;
            $product->hp_product_model= $request->hp_product_model;
            $product->hp_product_image= $imagename;
            $product->hp_product_price= $request->hp_product_price;
            $product->hp_product_description= $request->hp_product_description;
            $product->hp_product_publish_date=$request->hp_product_publish_date;
            $product->hp_product_status= $request->hp_product_status;
            $product->save();
            return redirect()->route('product.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'hp_product_name' => 'required' ,
            'hp_product_model' => 'required' ,
            'hp_product_image' => 'required|mimes:jpg,jpeg,png,bmp' ,
            'hp_product_price'=> 'required',
            'hp_product_description' => 'required' ,
            'hp_product_publish_date' => 'required' ,
            'hp_product_status' => 'required' ,

        ]);
        $image = $request -> file('hp_product_image');
        $slug = str_slug($request->hp_product_image);
        $product=Product::find($id);
        if(isset($image)) {
            $currentdate = Carbon::now()->todatestring();
            $imagename = $slug . '-' . $currentdate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            if (!file_exists('upload/product')) {
                mkdir('upload/product', 0777, true);
            }
            $image->move('upload/product', $imagename);
        }
        else{
            $imagename='default.png';
        }
            $product->hp_product_name= $request->hp_product_name;
            $product->hp_product_model= $request->hp_product_model;
            $product->hp_product_image= $imagename;
            $product->hp_product_price= $request->hp_product_price;
            $product->hp_product_description= $request->hp_product_description;
            $product->hp_product_publish_date= $request->hp_product_publish_date;
            $product->hp_product_status= $request->hp_product_status;
            $product->save();
            return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product= Product::find($id);
        if(file_exists('upload/product/'.$product->image))
        {

            unlink('upload/product/'.$product->image);

        }
        $product->delete();
        return redirect()->back();
    }
}
