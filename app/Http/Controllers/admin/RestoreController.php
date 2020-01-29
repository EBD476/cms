<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RestoreController extends Controller
{
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
