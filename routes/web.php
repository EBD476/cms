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
    Route::resource('gallery', 'GalleryController');
    Route::post('/image-save','NewsController@upload')->name('news.upload');
    Route::post('/image-slider-save','SliderController@slider_upload')->name('slider.slider_upload');
    Route::post('/image-project-save','ProjectsController@project_upload')->name('project.project_upload');
    Route::post('/image-product-save','ProductController@product_upload')->name('product.product_upload');
    Route::post('/image-pages-save','PagesController@pages_upload')->name('pages.pages_upload');
    Route::post('/image-user-save','DataUserController@user_upload')->name('datauser.user_upload');
    Route::post('/image-gallery-save','GalleryController@gallery_upload')->name('gallery.gallery_upload');
    Route::get('up','dashboardcontroller@up')->name('admin.up');
    Route::get('down','dashboardcontroller@down')->name('admin.down');
    Route::resource('publish', 'ArticleController');
    Route::resource('contact_us','ContactUsController');




});
route::group(['prefix' => 'frontend', 'namespace' => 'frontend'], function () {
    Route::get('welcome', 'HomeController@index')->name('welcome');
    Route::get('faq2', 'FAQController@index');
    //$pages = \App\Pages::all();
    // foreach ($pages as $pages){
    Route::get('pages/{page}', 'PageController@index')->name('frontend.pages.test');
    //  }
    Route::get('product', 'ProductController@index')->name('frontend.product.index');
    Route::get('gallery', 'GalleryController@index')->name('frontend.gallery.index');
    Route::get('news', 'NewsController@index')->name('frontend.news.index');
    Route::get('article', 'ArticleController@index')->name('frontend.article.index');
    Route::get('project', 'ProjectController@index')->name('frontend.project.index');


});


