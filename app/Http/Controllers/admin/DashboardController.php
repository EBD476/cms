<?php

namespace App\Http\Controllers\admin;

use App\Dealerships;
use App\Menu;
use App\Product;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $products_count = Product::All()->count();
        $project_count = Project::All()->count();
        $dealership=Dealerships::All()->count();
        $menus  = Menu::all();
        return  view('admin.dashboard',compact('products_count','project_count','dealership','menus'));

    }
}
