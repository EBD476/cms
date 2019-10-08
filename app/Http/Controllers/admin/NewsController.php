<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\News;
use http\Env\Response;
use Illuminate\Http\Request;
use carbon\carbon;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $user=User::ALL();
        return view('admin.news.create');
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
            'hn_title' => 'required',
            'hn_description' => 'required',
            'hn_show' => 'required',
        ]);

        $news = new News();
        $news->hn_title = $request->hn_title;
        $news->hn_description = $request->hn_description;
        $news->hn_image = $request->hn_image;
        $news->hn_status = $request->hn_show;
        $news->save();
        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        return view('admin.news.edit', compact('news'));
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

        $this->validate($request,[
            'hn_title'=>'required',
            'hn_description' => 'required' ,
//            'hn_view_count' => 'required' ,
            'hn_show' => 'required',
        ]);
        $news = News::find($id);
        $news->hn_title = $request->hn_title;
        $news->hn_description = $request->hn_description;
        $news->hn_image = $request->hn_image;
        $news->hn_status = $request->hn_show;
        $news->save();
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect()->back()->with('successMSG', 'عملیات حذف اطلاعات با موفقیت انجام شد.');
    }

    public function upload(Request $request)
    {
        $image = $request->file('file');
        $filename=$_FILES['file']['name'];

        if (isset($image)) {
            $current_date = Carbon::now()->todatestring();
//          $image_name = $current_date . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            if (!file_exists('img/news')) {
                mkdir('img/news', 0777, true);
            }
            $image->move('img/news', $filename);
        } else {
            $image_name = 'default.png';
        }

        return response()->json([
            'link' => '/img/news/'.$filename
        ]);
//        $news = new News();
//        $news->hn_image = $image_name;
//        $news->save();
//
    }

}

