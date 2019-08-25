<?php

namespace App\Http\Controllers\admin;

use App\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use carbon\carbon;
class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery:: all();
        return view('admin.gallery.index',compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');
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
            'hg_name' => 'required' ,
            'hg_code' => 'required' ,
            'hg_description' => 'required' ,
        ]);
        $gallery = new Gallery();
        $gallery->hg_name= $request->hg_name;
        $gallery->hg_code= $request->hg_code;
        $gallery->hg_description= $request->hg_description;
        $gallery->hg_image=$request->hn_image;
        $gallery->save();
        return redirect()->route('gallery.index');

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
        $gallery = Gallery::find($id);
        return view('admin.gallery.edit',compact('gallery'));
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
            'hg_name' => 'required' ,
            'hg_code' => 'required' ,
            'hg_description' => 'required' ,
        ]);
        $gallery =Gallery::find($id);
        $gallery->hg_name= $request->hg_name;
        $gallery->hg_code= $request->hg_code;
        $gallery->hg_description= $request->hg_description;
        $gallery->hg_image=$request->hn_image;
        $gallery->save();
        return redirect()->route('gallery.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        if(file_exists('upload/gallery/'.$gallery->hg_image))
        {

            unlink('upload/gallery/'.$gallery->hg_image);

        }
        $gallery->delete();
        return redirect()->back()->with('successMSG','Image Successfully Delete');
    }
    public function gallery_upload(Request $request)
    {
        $image = $request->file('file');
        $filename=$_FILES['file']['name'];

        if (isset($image)) {
            $current_date = Carbon::now()->todatestring();
//          $image_name = $current_date . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            if (!file_exists('img/gallery')) {
                mkdir('img/gallery', 0777, true);
            }
            $image->move('img/gallery', $filename);
        } else {
            $image_name = 'default.png';
        }
//        $news = new News();
//        $news->hn_image = $image_name;
//        $news->save();
//
    }


}
