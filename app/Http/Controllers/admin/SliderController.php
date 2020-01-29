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
        return view('admin.slider.index');
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'sub_title' => 'required',
        ]);
        $slider = new slider();
        $slider->title = $request->title;
        $slider->sub_title = $request->sub_title;
        $slider->image = $request->image;
        if ($request->status == 'on') {
            $slider->status = 1;
        }
        $slider->save();
        return json_encode(["response" => "Done"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
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
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = slider::find($id);
        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'sub_title' => 'required',
        ]);
        $slider = slider::find($id);
        $slider->title = $request->title;
        $slider->sub_title = $request->sub_title;
        $slider->image = $request->hn_image;
        $slider->status =$request->status;
        $slider->save();
        return json_encode(["response" => "Done"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = slider::find($id);
        if (file_exists('upload/slider/' . $slider->image)) {

            unlink('upload/slider/' . $slider->image);

        }
        $slider->delete();
        return json_encode(["response" => "Done"]);
    }

    public function slider_upload(Request $request)
    {
        $image = $request->file('file');
        $filename = $_FILES['file']['name'];

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

    public function slider_status(Request $request)
    {
        $sataus = slider::find($request->id);
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
            $slider = News::skip($start)->take($length)->get();
        } else {
            $slider = slider::where('id', 'LIKE', "%$search%")
                ->orwhere('hn_title', 'LIKE', "%$search%")
                ->orwhere('hn_published_at', 'LIKE', "%$search%")
                ->get();
        }

        $data = '';
        foreach ($slider as $sliders) {
            $data .= '["' . $sliders->id . '",' . '"' . $sliders->hn_title . '",' . '"' . $sliders->hn_published_at . '",' . '"' . $sliders->hn_status . '"],';
        }
        $data = substr($data, 0, -1);
        $slider_count = slider::all()->count();
        return response('{ "recordsTotal":' . $slider_count . ',"recordsFiltered":' . $slider_count . ',"data": [' . $data . ']}');
    }
}
