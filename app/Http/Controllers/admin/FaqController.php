<?php

namespace App\Http\Controllers\admin;

use App\FAQ;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
    public function index()
    {
        return view('admin.faq.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faq.create');
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
//            'question'=>'required,max:11',
//            'answer'=>'required',
//            'status'=>'required',
        ]);
        $faq=new FAQ();
        $faq->question=$request->question;
        $faq->answer=$request->answer;
        $faq->status=$request->status;
        $faq->save();
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faq=FAQ::FIND($id);
        return view('admin.faq.edit',compact('faq'));
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
            'question'=>'required',
            'answer'=>'required',
            'status'=>'required',
        ]);
        $faq=FAQ::FIND($id);
        $faq->question=$request->question;
        $faq->answer=$request->answer;
        $faq->status=$request->status;
        $faq->save();
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
        $faq=FAQ::FIND($id);
        $faq->delete();
        return json_encode(["response" => "Done"]);    }
    public function faq_status(Request $request)
    {
        $sataus = FAQ::find($request->id);
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
            $faq = FAQ::skip($start)->take($length)->get();
        } else {
            $faq = FAQ::where('id', 'LIKE', "%$search%")
                ->orwhere('created_at', 'LIKE', "%$search%")
                ->orwhere('question', 'LIKE', "%$search%")
                ->get();
        }

        $data = '';
        foreach ($faq as $faqs) {
            $data .= '["' . $faqs->id . '",' . '"' . $faqs->created_at . '",' . '"' . $faqs->question . '",' . '"' . $faqs->status . '"],';
        }
        $data = substr($data, 0, -1);
        $faq_count = FAQ::all()->count();
        return response('{ "recordsTotal":' . $faq_count . ',"recordsFiltered":' . $faq_count . ',"data": [' . $data . ']}');
    }
}
