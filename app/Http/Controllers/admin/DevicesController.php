<?php

namespace App\Http\Controllers\admin;
use App\Devices;
use App\hnt_devices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DevicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devices = Devices:: all();
        return view('admin.devices.index',compact('devices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.devices.create');
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
            'type' => 'required' ,
            'model' => 'required' ,
            'serial' => 'required',
            'install_date'=> 'required',
            'install_loc'=>'required',
            'update'=>'required',
            'status'=>'required',
            'description'=>'required',
        ]);
        $devices = new Devices();
        $devices->type= $request->type;
        $devices->model= $request->model;
        $devices->serial=$request->serial;
        $devices->install_date=$request->install_date;
        $devices->install_loc=$request->install_loc;
        $devices->update=$request->update;
        $devices->status=$request->status;
        $devices->description=$request->description;
        $devices->save();
        return redirect()->route('devices.index');
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
        $devices = Devices::find($id);
        return view('admin.devices.edit',compact('devices'));
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
            'type' => 'required' ,
            'model' => 'required' ,
            'serial' => 'required',
            'install_date'=> 'required',
            'install_loc'=> 'required',
            'update'=> 'required',
            'status'=> 'required',
            'description'=> 'required',
        ]);

        $devices=Devices::find($id);
        $devices->type= $request->type;
        $devices->model= $request->model;
        $devices->serial=$request->serial;
        $devices->install_date=$request->install_date;
        $devices->install_loc=$request->install_loc;
        $devices->update=$request->update;
        $devices->status=$request->status;
        $devices->description=$request->description;
        $devices->save();
        return redirect()->route('devices.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $devices= Devices::find($id);
        $devices->delete();
        return redirect()->back();
    }
}
