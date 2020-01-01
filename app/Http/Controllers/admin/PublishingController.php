<?php

namespace App\Http\Controllers\admin;

use App\publish;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublishingController extends Controller
{
    public function index()
    {
        $publish= publish::paginate(10);
        return view('admin.editor.index',compact('publish'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user=User::ALL();
        return view('admin.editor.create',compact('user'));
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
            'user_id'=>'required',
            'title' => 'required' ,
            'concept' => 'required' ,
        ]);

        $publish = new publish();
        $publish->user_id= $request->user_id;
        $publish->title= $request->title;
        $request->froala = str_replace('<p data-f-id="pbf" style="text-align: center; font-size: 14px; margin-top: 30px; opacity: 0.65; font-family: sans-serif;">Powered by <a href="https://www.froala.com/wysiwyg-editor?pb=1" title="Froala Editor">Froala Editor</a></p>', "", $request->froala);
        $publish->ha_editor= $request->froala;
        $publish->ha_status= $request->hn_show;
        $publish->save();
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
        $publish =publish::find($id);
        return view('admin.editor.edit',compact('publish'));
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
            'hp_auther	' => 'required' ,
            'title' => 'required' ,
            'editor' => 'required' ,

        ]);

        $publish =publish::find($id);
        $publish->hp_auther	= $request->hp_auther;
        $publish->title= $request->title;
        $request->froala = str_replace('<p data-f-id="pbf" style="text-align: center; font-size: 14px; margin-top: 30px; opacity: 0.65; font-family: sans-serif;">Powered by <a href="https://www.froala.com/wysiwyg-editor?pb=1" title="Froala Editor">Froala Editor</a></p>', "", $request->froala);
        $publish->ha_editor= $request->froala;
        $publish->hp_image= $request->hp_image;
        $publish->ha_status= $request->hn_show;
        $publish->save();
        return json_encode(["response" => "Done"]);    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $publish =publish::find($id);
        $publish->delete();
        return json_encode(["response" => "Done"]);    }
}
