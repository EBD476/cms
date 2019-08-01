<?php

namespace App\Http\Controllers\admin;

use App\slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use carbon\carbon;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = slider:: all();
        return view('admin.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
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
            'sub_title' => 'required' ,
        ]);
        $slider = new slider();
        $slider->title= $request->title;
        $slider->sub_title= $request->sub_title;
        $slider->image=$request->hn_image;
        $slider->save();
        return redirect()->route('slider.index');

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
        $slider = slider::find($id);
        return view('admin.slider.edit',compact('slider'));
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
            'sub_title' => 'required' ,
        ]);
        $slider=slider::find($id);
            $slider->title= $request->title;
            $slider->sub_title= $request->sub_title;
            $slider->image= $request->hn_image;
            $slider->save();
            return redirect()->route('slider.index')->with('successMSG','Slider Successfully Update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = slider::find($id);
        if(file_exists('upload/slider/'.$slider->image))
        {

            unlink('upload/slider/'.$slider->image);

        }
        $slider->delete();
        return redirect()->back()->with('successMSG','Slider Successfully Delete');
    }
    public function slider_upload(Request $request)
    {
        $image = $request->file('file');
        $filename=$_FILES['file']['name'];

        if (isset($image)) {
            $current_date = Carbon::now()->todatestring();
//          $image_name = $current_date . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            if (!file_exists('img/slider')) {
                mkdir('img/slider', 0777, true);
            }
            $image->move('img/slider', $filename);
        } else {
            $image_name = 'default.png';
        }
//        $news = new News();
//        $news->hn_image = $image_name;
//        $news->save();
//
    }
}
