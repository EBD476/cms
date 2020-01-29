<?php

namespace App\Http\Controllers\admin;

use App\category;
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
        return view('admin.gallery.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=category::all();
        return view('admin.gallery.create',compact('category'));
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
            'hg_category_name' => 'required' ,
//            'hg_show' => 'required' ,
        ]);
        $gallery = new Gallery();
        $gallery->hg_name= $request->hg_name;
        $gallery->hg_category_name= $request->hg_category_name;
        $gallery->hg_code= $request->hg_code;
        $gallery->hg_description= $request->hg_description;
        $gallery->hg_image=$request->hn_image;
        if($request->hg_show == 'on'){
            $gallery->hg_show=1;

        }
        else{
            $gallery->hg_show=0;

        }
        $gallery->save();
        return json_encode(["response" => "Done"]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return view('admin.gallery.show');
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
            'hg_category_name' => 'required' ,
            'hg_show' => 'required' ,

        ]);
        $gallery =Gallery::find($id);
        $gallery->hg_name= $request->hg_name;
        $gallery->hg_category_name= $request->hg_category_name;
        $gallery->hg_code= $request->hg_code;
        $gallery->hg_description= $request->hg_description;
        $gallery->hg_image=$request->hg_image;
        $gallery->hg_show=$request->hg_show;
        $gallery->save();
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
        $gallery = Gallery::find($id);
        if(file_exists('upload/gallery/'.$gallery->hg_image))
        {

            unlink('upload/gallery/'.$gallery->hg_image);

        }
        $gallery->delete();
        return json_encode(["response" => "Done"]);
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
    public function gallery_status(Request $request)
    {
        $sataus = Gallery::find($request->id);
        $sataus->hg_show = $request->status;
        $sataus->save();
        return json_encode(["response" => "Done"]);
    }

    public function fill(Request $request)
    {
        $start = $request->start;
        $length = $request->length;
        $search = $request->search['value'];
        if ($search == '') {
            $gallery = Gallery::skip($start)->take($length)->get();
        } else {
            $gallery = Gallery::where('id', 'LIKE', "%$search%")
                ->orwhere('hg_name', 'LIKE', "%$search%")
                ->orwhere('hg_category_name', 'LIKE', "%$search%")
                ->get();
        }

        $data = '';
        foreach ($gallery as $galleries) {
            $data .= '["' . $galleries->id . '",' . '"' . $galleries->hg_name . '",' . '"' . $galleries->hg_category_name . '",' . '"' . $galleries->hg_show . '"],';
        }
        $data = substr($data, 0, -1);
        $gallery_count = Gallery::all()->count();
        return response('{ "recordsTotal":' . $gallery_count . ',"recordsFiltered":' . $gallery_count . ',"data": [' . $data . ']}');
    }
}
