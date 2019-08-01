<?php

namespace App\Http\Controllers\admin;

use App\hnt_projects;
use App\Project;
use App\Type_Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use carbon\carbon;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $projects = Project:: all();
        return view('admin.projects.index',compact('projects' ,'type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type=Type_Project::ALL();
        return view('admin.projects.create',compact( 'type'));
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
            'hp_project_name' => 'required' ,
            'hp_project_owner' => 'required' ,
            'hp_project_type' => 'required',
            'hp_project_units'=> 'required',
            'hp_project_address'=> 'required',
            'hp_project_description'=> 'required',
            'hp_project_options'=> 'required',
            'hp_project_complete_date'=> 'required',
        ]);
        $projects = new Project();
        $projects->hp_project_name= $request->hp_project_name;
        $projects->hp_project_owner= $request->hp_project_owner;
        $projects->hp_project_type=$request->hp_project_type;
        $projects->hp_project_units=$request->hp_project_units;
        $projects->hp_project_image=$request->hn_image;
        $projects->hp_project_address=$request->hp_project_address;
        $projects->hp_project_description=$request->hp_project_description;
        $projects->hp_project_options=$request->hp_project_options;
        $projects->hp_project_complete_date=$request->hp_project_complete_date;
        $projects->save();
        return redirect()->route('project.index');
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
        $projects = Project::find($id);
        return view('admin.projects.edit',compact('projects'));
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
            'hp_project_name' => 'required' ,
            'hp_project_owner' => 'required' ,
            'hp_project_type' => 'required',
            'hp_project_units'=> 'required',
            'hp_project_address'=> 'required',
            'hp_project_description'=> 'required',
            'hp_project_options'=> 'required',
            'hp_project_complete_date'=> 'required',
        ]);
        $projects=Project::find($id);
        $projects->hp_project_name= $request->hp_project_name;
        $projects->hp_project_owner= $request->hp_project_owner;
        $projects->hp_project_type=$request->hp_project_type;
        $projects->hp_project_units=$request->hp_project_units;
        $projects->hp_project_image=$request->hn_image;
        $projects->hp_project_address=$request->hp_project_address;
        $projects->hp_project_description=$request->hp_project_description;
        $projects->hp_project_options=$request->hp_project_options;
        $projects->hp_project_complete_date=$request->hp_project_complete_date;
        $projects->save();
        return redirect()->route('project.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projects= Project::find($id);
        $projects->delete();
        return redirect()->back();
    }
    public function project_upload(Request $request)
    {
        $image = $request->file('file');
        $filename=$_FILES['file']['name'];

        if (isset($image)) {
            $current_date = Carbon::now()->todatestring();
//          $image_name = $current_date . '-' . uniqid() . '.' . $image->getClientOriginalExtension();
            if (!file_exists('img/project')) {
                mkdir('img/project', 0777, true);
            }
            $image->move('img/project', $filename);
        } else {
            $image_name = 'default.png';
        }
//        $news = new News();
//        $news->hn_image = $image_name;
//        $news->save();
//
    }

}
