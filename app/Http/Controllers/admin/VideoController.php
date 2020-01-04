<?php

namespace App\Http\Controllers\admin;

use App\category;
use App\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use carbon\carbon;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $video = Video:: all();
        return view('admin.video.index', compact('video'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category_v = category::all();
        return view('admin.video.create', compact('category_v'));
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
            'hv_title' => 'required',
            'hv_category' => 'required',
//            'hv_video' => 'required',
            'hv_status' => 'required',
        ]);
        $video = new Video();
        $video->hv_title = $request->hv_title;
        $video->hv_category = $request->hv_category;
        $video->hv_video = $request->hv_video;
        if ($request->hv_status == 'on') {
            $video->hv_status = 1;

        } else {
            $video->hv_status = 0;

        }
        $video->save();
        return json_encode(["response" => "Done"]);

    }


    public function edit($id)
    {
        $video = Video::find($id);
        return view('admin.video.edit', compact('video'));
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
//            'title' => 'required',
//            'category' => 'required',
////            'hv_video' => 'required',
//            'status' => 'required',

        ]);
        $video = Video::find($id);
        $video->hv_title = $request->title;
        $video->hv_category = $request->category;
        $video->hv_video = $request->video;
        $video->hv_status = $request->status;
        $video->save();
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
        $video = Video::find($id);
        if (file_exists('upload/video/' . $video->hv_video)) {

            unlink('upload/video/' . $video->hv_video);

        }
        $video->delete();
        return json_encode(["response" => "Done"]);
    }

    public function video_upload(Request $request)
    {


    }

        public
        function video_status(Request $request)
        {
            $video = Video::find($request->id);
            $video->hv_status = $request->status;
            $video->save();
            return json_encode(["response" => "Done"]);
        }
    }
