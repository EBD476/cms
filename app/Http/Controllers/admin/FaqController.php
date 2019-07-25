<?php

namespace App\Http\Controllers\admin;

use App\FAQ;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
    public function index()
    {
        $faq= FAQ::all();
        return view('admin.faq.index',compact('faq'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faq.create');
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
            'question'=>'required,max:11',
            'answer'=>'required',
            'status'=>'required',
        ]);
        $faq=new FAQ();
        $faq->question=$request->question;
        $faq->answer=$request->answer;
        $faq->status=$request->status;
        $faq->save();
        return redirect()->route('faq.index');
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
        $faq=FAQ::FIND($id);
        return view('admin.faq.edit',compact('faq'));
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
            'question'=>'required',
            'answer'=>'required',
            'status'=>'required',
        ]);
        $faq=FAQ::FIND($id);
        $faq->question=$request->question;
        $faq->answer=$request->answer;
        $faq->status=$request->status;
        $faq->save();
        return redirect()->route('faq.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faq=FAQ::FIND($id);
        $faq->delete();
        return redirect()->back();
    }
}
