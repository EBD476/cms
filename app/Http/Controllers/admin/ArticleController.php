<?php

namespace App\Http\Controllers\admin;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index()
    {
        $article = Article::all();
        return view('admin.editor.index', compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $user=User::ALL();
        return view('admin.editor.create');
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
            'ha_title	' => 'required',
            'ha_auther' => 'required',
            'ha_editor' => 'required',

        ]);

        $article = new Article();
        $article->ha_title = $request->hn_title;
        $article->ha_auther = $request->hn_title;
        $article->ha_editor = $request->hn_description;
        $article->ha_image = $request->hn_image;
        $article->save();
        return redirect()->route('publish.index');
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
        $article = Article::find($id);
        return view('admin.editor.edit', compact('article'));
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
            'ha_title	' => 'required',
            'ha_auther' => 'required',
            'ha_editor' => 'required',

        ]);
        $article = Article::find($id);
        $article->ha_title = $request->hn_title;
        $article->ha_auther = $request->hn_title;
        $article->ha_editor = $request->hn_description;
        $article->ha_image = $request->hn_image;
        $article->save();
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
        $article = Article::find($id);
        $article->delete();
        return redirect()->back()->with('successMSG', 'عملیات حذف اطلاعات با موفقیت انجام شد.');
    }

    public function upload(Request $request)
    {
        $image = $request->file('file');
        $filename=$_FILES['file']['name'];

        if (isset($image)) {
            $current_date = Carbon::now()->todatestring();
//          $image_name = $current_date . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            if (!file_exists('img/article')) {
                mkdir('img/article', 0777, true);
            }
            $image->move('img/article', $filename);
        } else {
            $image_name = 'default.png';
        }
//        $news = new News();
//        $news->hn_image = $image_name;
//        $news->save();
//
    }
}
