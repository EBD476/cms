<?php

namespace App\Http\Controllers\admin;


use App\Device_Config;
use App\hnt_device_config;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Device_configController extends Controller
{
    public function index()
    {
        $config = Device_Config:: all();
        return view('admin.config.index',compact('config'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.config.create');
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
            'hdc_device_id' => 'required' ,
            'hdc_device_serial' => 'required' ,
            'hdc_control_config' => 'required',
        ]);

        $config = new Device_Config();
        $config->hdc_device_id= $request->hdc_device_id;
        $config->hdc_device_serial= $request->hdc_device_serial;
        $config->hdc_control_config=$request->hdc_control_config;
        $config->save();
        return redirect()->route('config.index');
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
        $config = Device_Config::find($id);
        return view('admin.config.edit',compact('config'));
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
            'hdc_device_id' => 'required' ,
            'hdc_device_serial' => 'required' ,
            'hdc_control_config' => 'required',

        ]);

        $config=Device_Config::find($id);
        $config->hdc_device_id= $request->hdc_device_id;
        $config->hdc_device_serial= $request->hdc_device_serial;
        $config->hdc_control_config=$request->hdc_control_config;
        $config->save();
        return redirect()->route('config.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $config= Device_Config::find($id);
        $config->delete();
        return redirect()->back();
    }
}
