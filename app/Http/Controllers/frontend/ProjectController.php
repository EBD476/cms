<?php

namespace App\Http\Controllers\frontend;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ProjectController extends Controller
{
        public function index()
    {
        $project2 = Project::ALL();
        $project = Project::ALL();
        return view('frontend.project.index', compact('project','project2'));
    }

}
