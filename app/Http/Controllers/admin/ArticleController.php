<?php

namespace App\Http\Controllers\admin;

use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use carbon\carbon;

class ArticleController extends Controller
{
    public function index()
    {
        return view('admin.editor.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
//        $this->validate($request, [
//            'ha_title	' => 'required',
//            'hn_description' => 'required',
//            'ha_show' => 'required',
//        ]);

        $article = new Article();
        $article->ha_title = $request->hn_title;
        $request->froala = str_replace('<p data-f-id="pbf" style="text-align: center; font-size: 14px; margin-top: 30px; opacity: 0.65; font-family: sans-serif;">Powered by <a href="https://www.froala.com/wysiwyg-editor?pb=1" title="Froala Editor">Froala Editor</a></p>', "", $request->froala);
        $article->ha_editor = $request->froala;
        $article->ha_image = $request->hn_image;
        $article->ha_status = $request->ha_show;
        $article->save();
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

//        $this->validate($request, [
//            'ha_title	' => 'required',
//            'ha_auther' => 'required',
//            'ha_editor' => 'required',
//            'ha_show' => 'required',
//
//        ]);
        $article = Article::find($id);
        $article->ha_title = $request->ha_title;
//      $article->ha_auther = $request->ha_auther;
        $request->froala = str_replace('<p data-f-id="pbf" style="text-align: center; font-size: 14px; margin-top: 30px; opacity: 0.65; font-family: sans-serif;">Powered by <a href="https://www.froala.com/wysiwyg-editor?pb=1" title="Froala Editor">Froala Editor</a></p>', "", $request->froala);
        $article->ha_editor = $request->froala;
        $article->ha_image = $request->hn_image;
        $article->ha_status =$request->ha_show;
        $article->save();
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
        $article = Article::find($id);
        $article->delete();
        return json_encode(["response" => "Done"]);
    }

    public function upload(Request $request)
    {
        $image = $request->file('file');
        $filename = $_FILES['file']['name'];

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

    public function update_status(Request $request)
    {
        $article = Article::find($request->id);
        $article->ha_status = $request->status;
        $article->save();
        return json_encode(["response" => "Done"]);
    }


    public function fill(Request $request)
    {
        $start = $request->start;
        $length = $request->length;
        $search = $request->search['value'];
        if ($search == '') {
            $article = Article::skip($start)->take($length)->get();
        } else {
            $article = Article::where('id', 'LIKE', "%$search%")
                ->orwhere('ha_title', 'LIKE', "%$search%")
                ->orwhere('ha_editor', 'LIKE', "%$search%")
                ->orwhere('created_at', 'LIKE', "%$search%")
                ->get();
        }

        $data = '';
        foreach ($article as $articles) {
            $data .= '["' . $articles->id . '",' . '"' . $articles->ha_title . '",' . '"' . $articles->ha_status . '",' . '"' . $articles->created_at . '"],';
        }
        $data = substr($data, 0, -1);
        $article_count = Article::all()->count();
        return response('{ "recordsTotal":' . $article_count . ',"recordsFiltered":' . $article_count . ',"data": [' . $data . ']}');
    }
}
