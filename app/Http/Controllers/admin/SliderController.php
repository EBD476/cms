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
            'image' => 'required|mimes:jpg,jpeg,png,bmp' ,
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->title);
        if(isset($image))
        {
            $currentdate = Carbon::now()->todatestring();
            $imagename = $slug . '-' . $currentdate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            if (!file_exists('upload/slider')) {
                mkdir('upload/slider', 0777, true);
            }
            $image->move('upload/slider', $imagename);
        }
        else
        {
            $imagename='default.png';
        }
        $slider = new slider();
        $slider->title= $request->title;
        $slider->sub_title= $request->sub_title;
        $slider->image=$imagename;
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
            'image' =>'mimes:jpg,jpeg,png,bmp',
        ]);
        $image = $request -> file('image');
        $slug = str_slug($request->title);
        $slider=slider::find($id);
        if(isset($image)) {
            $currentdate = Carbon::now()->todatestring();
            $imagename = $slug . '-' . $currentdate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            if (!file_exists('upload/slider')) {
                mkdir('upload/slider', 0777, true);
            }
            $image->move('upload/slider', $imagename);
        }
            else{
                $imagename='default.png';
            }
            $slider->title= $request->title;
            $slider->sub_title= $request->sub_title;
            $slider->image= $imagename;
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
}
