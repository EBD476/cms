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
        ]);
        $item = new items();
        $item->categoury_id= $request->category;
        $item->name= $request->name;
        $item->description= $request->description;
        $item->price= $request->price;
        $item->image = $request->hn_image;
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
        ]);
        $item=items::find($id);
            $item->name= $request->name;
            $item->description= $request->description;
            $item->price= $request->price;
            $item->image = $request->hn_image;
            $item->save();
            return redirect()->route('items.index')->with('successMSG','item Successfully Update');
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
    public function item_upload(Request $request)
    {
        $image = $request->file('file');
        $filename=$_FILES['file']['name'];

        if (isset($image)) {
            $current_date = Carbon::now()->todatestring();
//          $image_name = $current_date . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            if (!file_exists('img/news')) {
                mkdir('img/news', 0777, true);
            }
            $image->move('img/item', $filename);
        } else {
            $image_name = 'default.png';
        }
//        $news = new News();
//        $news->hn_image = $image_name;
//        $news->save();
//
    }
}
