<?php

namespace App\Http\Controllers\admin;

use App\Menu;
use App\Pages;
use App\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public function index()
    {
        $menu= Menu::all();
        return view('admin.menu.index',compact('menu'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type=Type::ALL();
        $label=Type::ALL();
        $items=Pages::ALL();
        $menus=Menu::ALL();
        return view('admin.menu.create',compact('type','label','items','menus'));
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
            'type'=>'required',
            'name'=>'required',
            'items'=>'required',
            'label'=>'required',
            'parent_name'=>'required',
            'created_by'=>'required',
        ]);
        $menu=new Menu();
        $menu->type=$request->type;
        $menu->name=$request->name;
        $menu->items=$request->items;
        $menu->label=$request->label;
        $menu->parent_name=$request->parent_name;
        $menu->created_by=$request->created_by;
        $menu->image=$request->image;
        $menu->save();
        return redirect()->route('menu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu=Menu::FIND($id);
        $menus=Menu::ALL();
        return view('admin.menu.edit',compact('menu','menus'));
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
            'type'=>'required',
            'name'=>'required',
            'items'=>'required',
            'label'=>'required',
            'parent_name'=>'required',
            'created_by'=>'required',
            'updated_by'=>'required',
        ]);
        $menu=Menu::FIND($id);
        $menu->type=$request->type;
        $menu->name=$request->name;
        $menu->items=$request->items;
        $menu->label=$request->label;
        $menu->parent_name=$request->parent_name;
        $menu->created_by=$request->created_by;
        $menu->updated_by=$request->updated_by;
        $menu->image=$request->image;
        $menu->save();
        return redirect()->route('menu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu=Menu::FIND($id);
        $menu->delete();
        return redirect()->back();
    }
    public function upload(Request $request)
    {
        $image = $request->file('file');
        $filename=$_FILES['file']['name'];

        if (isset($image)) {
            $current_date = Carbon::now()->todatestring();
//          $image_name = $current_date . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            if (!file_exists('img/menu')) {
                mkdir('img/menu', 0777, true);
            }
            $image->move('img/menu', $filename);
        } else {
            $image_name = 'default.png';
        }

        return response()->json([
            'link' => '/img/menu/'.$filename
        ]);
//        $news = new News();
//        $news->hn_image = $image_name;
//        $news->save();
//
    }
}
