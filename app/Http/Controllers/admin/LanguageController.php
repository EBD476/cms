<?php

namespace App\Http\Controllers\admin;

use App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    /**
     * @param $lan
     * @return mixed
     */
    public function  locale($lan){


        if (Session::has('locale')){
            App::setLocale($lan);
            Session::put('locale', $lan);
        } else{
            Session::put('locale','fa');
            App::SetLocale('fa');
        }

        return redirect()->back();
    }
}
