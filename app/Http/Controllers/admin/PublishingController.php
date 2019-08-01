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
        $publish->concept= $request->concept;
        $publish->save();
        return redirect()->route('publish.index');
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
        $publish->editor= $request->concept;
        $publish->hp_image= $request->hp_image;
        $publish->save();
        return redirect()->route('publish.index');
    }

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
        return redirect()->back()->with('successMSG','عملیات حذف اطلاعات با موفقیت انجام شد.');
    }
}
