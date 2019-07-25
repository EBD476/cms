<?php

namespace App\Http\Controllers\admin;

use App\category;
use App\items;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = items:: all();
        return view('admin.items.index',compact('item'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=category::all();
        return view('admin.items.create',compact('categories'));
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
            'category' =>'required',
            'name' => 'required' ,
            'description' => 'required' ,
           ' price'=>'required',
            'image' => 'required|mimes:jpg,jpeg,png,bmp' ,
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->title);
        if(isset($image))
        {
            $currentdate = Carbon::now()->todatestring();
            $imagename = $slug . '-' . $currentdate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            if (!file_exists('upload/item')) {
                mkdir('upload/item', 0777, true);
            }
            $image->move('upload/item', $imagename);
        }
        else
        {
            $imagename='default.png';
        }

        $item = new items();
        $item->categoury_id= $request->category;
        $item->name= $request->name;
        $item->description= $request->description;
        $item->price= $request->price;
        $item->image=$imagename;
        $item->save();
        return redirect()->route('items.index');

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
        $item = items::find($id);
        return view('admin.items.edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required' ,
            'description' => 'required' ,
            ' price'=>'required',
            'image' => 'required|mimes:jpg,jpeg,png,bmp' ,
        ]);
        $image = $request -> file('image');
        $slug = str_slug($request->title);
        $item=items::find($id);
        if(isset($image)){
            $currentdate =Carbon::now()->todatestring();
            $imagename = $slug.'-'.$currentdate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if (!file_exists('upload/item'))
            {
                mkdir('upload/item',0777,true);
                $image->move('upload/item',$imagename);

            }else
            {
                $imagename='default.png';
            }
            $item->name= $request->name;
            $item->description= $request->description;
            $item->price= $request->price;
            $item->image=$imagename;
            $item->save();
            return redirect()->route('items.index')->with('successMSG','item Successfully Update');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = items::find($id);
        if(file_exists('upload/items/'.$item->image))
        {

            unlink('upload/items/'.$item->image);

        }
        $item->delete();
        return redirect()->back()->with('successMSG','Item Successfully Delete');
    }
}
