<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'namespace' => 'admin'], function () {

    Route::get('dashboard', 'dashboardcontroller@index')->name('admin.dashboard');

    Route::resource('slider', 'SliderController');
    Route::resource('product', 'ProductController');
    Route::resource('category', 'CategoryController');
    Route::resource('items', 'ItemController');
    Route::resource('project', 'ProjectsController');
    Route::resource('config', 'Device_configController');
    Route::resource('devices', 'DevicesController');
    Route::resource('dealership', 'DealershipsController');
    Route::get('locale/{lan}', 'LanguageController@locale');
    Route::resource('user', 'DataUserController');
    Route::resource('faq', 'FaqController');
    Route::resource('pages', 'PagesController');
    Route::resource('setting', 'SettingController');
    Route::resource('menu', 'MenuController');
    Route::resource('news', 'NewsController');
    Route::post('/image-save','NewsController@upload')->name('news.upload');

});
route::group(['prefix' => 'frontend', 'namespace' => 'frontend'], function () {
    Route::get('welcome', 'HomeController@index')->name('welcome');
    Route::get('faq2', 'FAQController@index');
    //$pages = \App\Pages::all();
    // foreach ($pages as $pages){
    Route::get('pages/{page}', 'PageController@index')->name('frontend.pages.test');
    //  }
    Route::get('product', 'ProductController@index')->name('frontend.product.index');
    Route::get('project', 'ProjectController@index')->name('frontend.project.index');


});


