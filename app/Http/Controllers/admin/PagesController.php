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
            'image' =>'mimes:jpg,jpeg,png,bmp',
            'image2' =>'mimes:jpg,jpeg,png,bmp',
            'image3' =>'mimes:jpg,jpeg,png,bmp',
            'image4' =>'mimes:jpg,jpeg,png,bmp',
            'cannonical_link'=> 'required',
            'seo_title'=> 'required',
            'seo_keyword'=> 'required',
            'seo_description'=> 'required',
            'status'=> 'required',
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
        $pages->body=$request->froala;
        $pages->image=$image_name;
        $pages->image2=$image_name2;
        $pages->image3=$image_name3;
        $pages->image4=$image_name4;
        $pages->cannonical_link=$request->cannonical_link;
        $pages->seo_title=$request->seo_title;
        $pages->seo_keyword=$request->seo_keyword;
        $pages->seo_description=$request->seo_description;
        $pages->status=$request->status;
        $pages->created_by=auth()->user()->name;
        $pages->save();
        return json_encode(["response" => "Done"]);    }

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
            'image' =>'mimes:jpg,jpeg,png,bmp',
            'image2' =>'mimes:jpg,jpeg,png,bmp',
            'image3' =>'mimes:jpg,jpeg,png,bmp',
            'image4' =>'mimes:jpg,jpeg,png,bmp',
            'cannonical_link'=> 'required',
            'seo_title'=> 'required',
            'seo_keyword'=> 'required',
            'seo_description'=> 'required',
            'status'=> 'required',
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
        $pages->body=$request->froala;
        $pages->image=$request->hn_image;
        $pages->image2=$request->hn_image2;
        $pages->image3=$request->hn_image3;
        $pages->image4=$request->hn_image4;
        $pages->cannonical_link=$request->cannonical_link;
        $pages->seo_title=$request->seo_title;
        $pages->seo_keyword=$request->seo_keyword;
        $pages->seo_description=$request->seo_description;
        $pages->status=$request->status;
        $pages->updated_by=$request->auth()->user()->name;
        $pages->save();
        return json_encode(["response" => "Done"]);
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
    public function pages_upload(Request $request)
    {
        $image = $request->file('file');
        $filename=$_FILES['file']['name'];

        if (isset($image)) {
            $current_date = Carbon::now()->todatestring();
//          $image_name = $current_date . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            if (!file_exists('img/pages')) {
                mkdir('img/pages', 0777, true);
            }
            $image->move('img/pages', $filename);
        } else {
            $image_name = 'default.png';
        }
//        $news = new News();
//        $news->hn_image = $image_name;
//        $news->save();
//
    }
    public function pages_status(Request $request)
    {
        $sataus = Pages::find($request->id);
        $sataus->status = $request->status;
        $sataus->save();
        return json_encode(["response" => "Done"]);
    }
}
