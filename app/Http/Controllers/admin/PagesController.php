<?php

namespace App\Http\Controllers\admin;

use App\Pages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use carbon\carbon;

class PagesController extends Controller
{
    public function index()
    {
        $pages = Pages:: all();
        return view('admin.pages.index',compact('pages'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.create');
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
            'title' => 'required' ,
            'page_slug' => 'required' ,
            'description' => 'required',
            'image' =>'mimes:jpg,jpeg,png,bmp',
            'image2' =>'mimes:jpg,jpeg,png,bmp',
            'image3' =>'mimes:jpg,jpeg,png,bmp',
            'image4' =>'mimes:jpg,jpeg,png,bmp',
            'cannonical_link'=> 'required',
            'seo_title'=> 'required',
            'seo_keyword'=> 'required',
            'seo_description'=> 'required',
            'status'=> 'required',
            'created_by'=> 'required',
            'updated_by'=> 'required',
        ]);
        $image = $request -> file('image');
        $slug = str_slug($request->title);
        if(isset($image)) {
            $current_date = Carbon::now()->todatestring();
            $image_name = $slug . '-' . $current_date . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            if (!file_exists('upload/pages')) {
                mkdir('upload/pages', 0777, true);
            }
            $image->move('upload/pages', $image_name);
        }
        else{
            $image_name='default.png';
        }
        $image2 = $request -> file('image2');
        $slug = str_slug($request->title);
        if(isset($image2)) {
            $current_date2 = Carbon::now()->todatestring();
            $image_name2 = $slug . '-' . $current_date2 . '-' . uniqid() . '.' . $image2->getClientOriginalExtension();
            if (!file_exists('upload/pages')) {
                mkdir('upload/pages', 0777, true);
            }
            $image2->move('upload/pages', $image_name2);
        }
        else{
            $image_name2='default.png';
        }
        $image3 = $request -> file('image3');
        $slug = str_slug($request->title);
        if(isset($image3)) {
            $current_date3 = Carbon::now()->todatestring();
            $image_name3 = $slug . '-' . $current_date3 . '-' . uniqid() . '.' . $image3->getClientOriginalExtension();
            if (!file_exists('upload/pages')) {
                mkdir('upload/pages', 0777, true);
            }
            $image3->move('upload/pages', $image_name3);
        }
        else{
            $image_name3='default.png';
        }
        $image4 = $request -> file('image4');
        $slug = str_slug($request->title);
        if(isset($image4)) {
            $current_date4 = Carbon::now()->todatestring();
            $image_name4 = $slug . '-' . $current_date4 . '-' . uniqid() . '.' . $image4->getClientOriginalExtension();
            if (!file_exists('upload/pages')) {
                mkdir('upload/pages', 0777, true);
            }
            $image4->move('upload/pages', $image_name4);
        }
        else{
            $image_name4='default.png';
        }
        $pages = new Pages();
        $pages->title= $request->title;
        $pages->page_slug= $request->page_slug;
        $pages->description=$request->description;
        $pages->image=$image_name;
        $pages->image2=$image_name2;
        $pages->image3=$image_name3;
        $pages->image4=$image_name4;
        $pages->cannonical_link=$request->cannonical_link;
        $pages->seo_title=$request->seo_title;
        $pages->seo_keyword=$request->seo_keyword;
        $pages->seo_description=$request->seo_description;
        $pages->status=$request->status;
        $pages->created_by=$request->created_by;
        $pages->updated_by=$request->updated_by;
        $pages->save();
        return redirect()->route('pages.index');
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
        $pages = Pages::find($id);
        return view('admin.pages.edit',compact('pages'));
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
            'title' => 'required' ,
            'page_slug' => 'required' ,
            'description' => 'required',
            'image' =>'mimes:jpg,jpeg,png,bmp',
            'image2' =>'mimes:jpg,jpeg,png,bmp',
            'image3' =>'mimes:jpg,jpeg,png,bmp',
            'image4' =>'mimes:jpg,jpeg,png,bmp',
            'cannonical_link'=> 'required',
            'seo_title'=> 'required',
            'seo_keyword'=> 'required',
            'seo_description'=> 'required',
            'status'=> 'required',
            'created_by'=> 'required',
            'updated_by'=> 'required',
        ]);
        $pages=Pages::find($id);
        $image = $request -> file('image');
        $slug = str_slug($request->title);
        if(isset($image)) {
            $current_date = Carbon::now()->todatestring();
            $image_name = $slug . '-' . $current_date . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            if (!file_exists('upload/pages')) {
                mkdir('upload/pages', 0777, true);
            }
            $image->move('upload/pages', $image_name);
        }
        else{
            $image_name='default.png';
        }
        $image2 = $request -> file('image2');
        $slug = str_slug($request->title);
        if(isset($image2)) {
            $current_date2 = Carbon::now()->todatestring();
            $image_name2 = $slug . '-' . $current_date2 . '-' . uniqid() . '.' . $image2->getClientOriginalExtension();
            if (!file_exists('upload/pages')) {
                mkdir('upload/pages', 0777, true);
            }
            $image2->move('upload/pages', $image_name2);
        }
        else{
            $image_name2='default.png';
        }
        $image3 = $request -> file('image3');
        $slug = str_slug($request->title);
        if(isset($image3)) {
            $current_date3 = Carbon::now()->todatestring();
            $image_name3 = $slug . '-' . $current_date3 . '-' . uniqid() . '.' . $image3->getClientOriginalExtension();
            if (!file_exists('upload/pages')) {
                mkdir('upload/pages', 0777, true);
            }
            $image3->move('upload/pages', $image_name3);
        }
        else{
            $image_name3='default.png';
        }
        $image4 = $request -> file('image4');
        $slug = str_slug($request->title);
        if(isset($image4)) {
            $current_date4 = Carbon::now()->todatestring();
            $image_name4 = $slug . '-' . $current_date4 . '-' . uniqid() . '.' . $image4->getClientOriginalExtension();
            if (!file_exists('upload/pages')) {
                mkdir('upload/pages', 0777, true);
            }
            $image4->move('upload/pages', $image_name4);
        }
        else{
            $image_name4='default.png';
        }
        $pages->title= $request->title;
        $pages->page_slug= $request->page_slug;
        $pages->description=$request->description;
        $pages->image=$image_name;
        $pages->image2=$image_name2;
        $pages->image3=$image_name3;
        $pages->image4=$image_name4;
        $pages->cannonical_link=$request->cannonical_link;
        $pages->seo_title=$request->seo_title;
        $pages->seo_keyword=$request->seo_keyword;
        $pages->seo_description=$request->seo_description;
        $pages->status=$request->status;
        $pages->created_by=$request->created_by;
        $pages->updated_by=$request->updated_by;
        $pages->save();
        return redirect()->route('pages.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pages= Pages::find($id);
        $pages->delete();
        return redirect()->back();
    }
}
