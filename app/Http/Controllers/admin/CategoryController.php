<?php

namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\category;
use Carbon\Carbon;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = category::all();
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
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
            'name' => 'required' ,
            'slug' => 'required' ,
        ]);

        $category = new category();
        $category->name= $request->name;
        $category->slug= $request->slug;
        $category->save();
        return redirect()->route('category.index');

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
        $category = category::find($id);
        return view('admin.category.edit',compact('$category'));
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
            'name' => 'required' ,
            'slug' => 'required' ,

        ]);
        $category=category::find($id);
        $category->name= $request->name;
        $category->slug= $request->slug;
        $category->save();
        return redirect()->route('category.index')->with('successMSG','category Successfully Update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = category::find($id);
        $category->delete();
//        $category->softDeletes();
        return redirect()->back()->with('successMSG','category Successfully Delete');
    }


    public function fill(Request $request)
    {
        $start = $request->start;
        $length = $request->length;
        $search = $request->search['value'];
        if ($search == '') {
            $news = News::skip($start)->take($length)->get();
        } else {
            $news = News::where('id', 'LIKE', "%$search%")
                ->orwhere('hn_title', 'LIKE', "%$search%")
                ->orwhere('hn_published_at', 'LIKE', "%$search%")
                ->get();
        }

        $data = '';
        foreach ($news as $newses) {
            $data .= '["' . $newses->id . '",' . '"' . $newses->hn_title . '",' . '"' . $newses->hn_published_at . '",' . '"' . $newses->hn_status . '"],';
        }
        $data = substr($data, 0, -1);
        $news_count = News::all()->count();
        return response('{ "recordsTotal":' . $news_count . ',"recordsFiltered":' . $news_count . ',"data": [' . $data . ']}');
    }
}
