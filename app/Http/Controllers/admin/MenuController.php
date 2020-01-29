<?php

namespace App\Http\Controllers\admin;

use App\Menu;
use App\Pages;
use App\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use carbon\carbon;


class MenuController extends Controller
{
    public function index()
    {
        return view('admin.menu.index');

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
        ]);
        $menu=new Menu();
        $menu->type=$request->type;
        $menu->name=$request->name;
        $menu->items=$request->items;
        $menu->label=$request->label;
        $menu->parent_name=$request->parent_name;
        $menu->created_by=auth()->user()->id;
        $menu->image=$request->image;
        if($request->status == 'on'){
            $menu->status=1;
        }else{
            $menu->status = 0;}
        $menu->save();
        return json_encode(["response" => "Done"]);    }

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
        ]);
        $menu=Menu::FIND($id);
        $menu->type=$request->type;
        $menu->name=$request->name;
        $menu->items=$request->items;
        $menu->label=$request->label;
        $menu->parent_name=$request->parent_name;
        $menu->updated_by=auth()->user()->id;
        $menu->image=$request->image;
        $menu->status=$request->status;
        $menu->save();
        return json_encode(["response" => "Done"]);    }

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
        return json_encode(["response" => "Done"]);
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
    public function menu_status(Request $request)
    {
        $sataus = Menu::find($request->id);
        $sataus->status = $request->status;
        $sataus->save();
        return json_encode(["response" => "Done"]);
    }

    public function fill(Request $request)
    {
        $start = $request->start;
        $length = $request->length;
        $search = $request->search['value'];
        if ($search == '') {
            $menu = Menu::skip($start)->take($length)->get();
        } else {
            $menu = Menu::where('id', 'LIKE', "%$search%")
                ->orwhere('type', 'LIKE', "%$search%")
                ->orwhere('name', 'LIKE', "%$search%")
                ->get();
        }

        $data = '';
        foreach ($menu as $menus) {
            $data .= '["' . $menus->id . '",' . '"' . $menus->type . '",' . '"' . $menus->name . '",' . '"' . $menus->status . '"],';
        }
        $data = substr($data, 0, -1);
        $menus_count = Menu::all()->count();
        return response('{ "recordsTotal":' . $menus_count . ',"recordsFiltered":' . $menus_count . ',"data": [' . $data . ']}');
    }
}
