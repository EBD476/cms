<?php

namespace App\Http\Controllers\admin;

use App\Address_City;
use App\Address_State;
use App\Dealerships;
use App\hnt_dealerships;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DealershipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dealerships = Dealerships:: all();
        return view('admin.dealerships.index', compact('dealerships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $address_city = Address_City::ALL();
        $address_state = Address_State::all();
        return view('admin.dealerships.create',compact('address_city','address_state'));
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
            'hds_dealership_code' => 'required',
            'hds_dealership_city' => 'required',
            'hds_dealership_agent' => 'required',
            'hds_dealership_address' => 'required',
            'hds_dealership_phone_1' => 'required',
            'hds_dealership_phone_2' => 'required',
            'hds_dealership_phone_3' => 'required',
            'hds_dealership_state' => 'required',
        ]);


        $dealerships = new Dealerships();
        $dealerships->hds_dealership_code = $request->hds_dealership_code;
        $dealerships->hds_dealership_city = $request->hds_dealership_city;
        $dealerships->hds_dealership_agent = $request->hds_dealership_agent;
        $dealerships->hds_dealership_address = $request->hds_dealership_address;
        $dealerships->hds_dealership_phone_1 = $request->hds_dealership_phone_1;
        $dealerships->hds_dealership_phone_2 = $request->hds_dealership_phone_2;
        $dealerships->hds_dealership_phone_3 = $request->hds_dealership_phone_3;
        $dealerships->hds_dealership_state = $request->hds_dealership_state;
        $dealerships->save();
        return redirect()->route('dealerships.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('test2');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dealerships = Dealerships::find($id);
        return view('admin.dealerships.edit', compact('dealerships'));
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
            'hds_dealership_code' => 'required',
            'hds_dealership_city' => 'required',
            'hds_dealership_agent' => 'required',
            'hds_dealership_address' => 'required',
            'hds_dealership_phone' => 'required',
            'hds_dealership_state' => 'required',
        ]);

        $dealerships = Dealerships::find($id);
        $dealerships->hds_dealership_code = $request->hds_dealership_code;
        $dealerships->hds_dealership_city = $request->hds_dealership_city;
        $dealerships->hds_dealership_agent = $request->hds_dealership_agent;
        $dealerships->hds_dealership_address = $request->hds_dealership_address;
        $dealerships->hds_dealership_phone = $request->hds_dealership_phone;
        $dealerships->hds_dealership_state = $request->hds_dealership_state;
        $dealerships->save();
        return redirect()->route('dealership.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dealerships = Dealerships::find($id);
        $dealerships->delete();
        return redirect()->back();
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
//        $news = new News();
//        $news->hn_image = $image_name;
//        $news->save();
//
    }

}
