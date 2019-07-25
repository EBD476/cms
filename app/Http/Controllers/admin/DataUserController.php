<?php

namespace App\Http\Controllers\admin;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use carbon\carbon;
use Illuminate\Support\Facades\Hash;
class DataUserController extends Controller
{
    public function index()
    {
            $dataUser = User:: all();
            return view('admin.user.index',compact('dataUser'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('admin.user.create');

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
            'username'=>'required',
            'email' => 'required' ,
            'email_verified_at'=>'required',
            'password' => 'required' ,
            'phone' => 'required' ,
            'address' => 'required' ,
            'remember_token' =>'required',
            'image'=>'required|mimes:jpg,jpeg,png,bmp',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->image);
        if(isset($image))
        {
            $currentdate = Carbon::now()->todatestring();
            $imagename = $slug . '-' . $currentdate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            if (!file_exists('upload/user')) {
                mkdir('upload/user', 0777, true);
            }
            $image->move('upload/user', $imagename);
        }
        else
        {
            $imagename='default.png';
        }
        $dataUser = new User();
        $dataUser->name= $request->name;
        $dataUser->username= $request->username;
        $dataUser->email= $request->email;
        $dataUser->email_verified_at= $request->email_verified_at;
        $dataUser->password= Hash::make($request->password);
        $dataUser->phone= $request->phone;
        $dataUser->address= $request->address;
        $dataUser->remember_token= $request->remember_token;
        $dataUser->image= $imagename;
        $dataUser->save();
        return redirect()->route('user.index');

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
        $dataUser = User::find($id);
        return view('admin.user.edit',compact('dataUser'));
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
        $this->validate($request, [
            'name' => 'required',
            'username'=>'required',
            'email' => 'required',
            'email_verified_at'=>'required',
            'password' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'remember_token' =>'required',
            'image' => 'required|mimes:jpg,jpeg,png,bmp',
        ]);
        $image = $request -> file('image');
        $slug = str_slug($request->image);
        $dataUser=User::find($id);
        if(isset($image)) {
            $currentdate = Carbon::now()->todatestring();
            $imagename = $slug . '-' . $currentdate . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            if (!file_exists('upload/user')) {
                mkdir('upload/user', 0777, true);
            }
            $image->move('upload/user', $imagename);
        }
        else{
            $imagename='default.png';
        }
            $dataUser->name= $request->name;
            $dataUser->username= $request->username;
            $dataUser->email= $request->email;
            $dataUser->email_verified_at= $request->email_verified_at;
            $dataUser->password= Hash::make($request->password);
            $dataUser->phone= $request->phone;
            $dataUser->address= $request->address;
            $dataUser->remember_token= $request->remember_token;
            $dataUser->image=$imagename;
            $dataUser->save();
            return redirect()->route('user.index')->with('successMSG', 'عملیات ویرایش اطلاعات با موفقیت انجام شد.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

            $dataUser = User::find($id);
            $dataUser->delete();
            return redirect()->back()->with('successMSG','عملیات حذف اطلاعات با موفقیت انجام شد.');

    }
}
