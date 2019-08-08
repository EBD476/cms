<?php

namespace App\Http\Controllers\admin;

use App\Article;
use App\Dealerships;
use App\Menu;
use App\News;
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
        $menus= Menu::all();
        $news=News::ALL()->count();
        $article=Article::all()->count();
        return  view('admin.dashboard',compact('products_count','project_count','dealership','menus','news','article'));

    }
    public function down()
    {
        \Artisan::call('down',['--allow'=>['127.0.0.1','192.168.1.105']]);

    }
    public function up()
    {
        \Artisan::call('up');
    }
}
