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

//    getting rote
    Route::get('locale/{lan}', 'LanguageController@locale');
    Route::get('dashboard', 'dashboardcontroller@index')->name('admin.dashboard');
    Route::get('up', 'dashboardcontroller@up')->name('admin.up');
    Route::get('down', 'dashboardcontroller@down')->name('admin.down');

//    resources route
    Route::resource('slider', 'SliderController');
    Route::resource('product', 'ProductController');
    Route::resource('category', 'CategoryController');
    Route::resource('project', 'ProjectsController');
    Route::resource('dealership', 'DealershipsController');
    Route::resource('user', 'UserController');
    Route::resource('faq', 'FaqController');
    Route::resource('pages', 'PagesController');
    Route::resource('setting', 'SettingController');
    Route::resource('menu', 'MenuController');
    Route::resource('news', 'NewsController');
    Route::resource('gallery', 'GalleryController');
    Route::resource('contact_us', 'ContactUsController');
    Route::resource('publish', 'ArticleController');
    Route::resource('video', 'VideoController');
    Route::resource('roles', 'RoleController');
    Route::resource('permissions', 'PermissionController');
    Route::resource('restore', 'RestoreController');

//    uploaded video
    Route::post('/upload-video', 'VideoController@upload_video')->name('video.upload-video');


//    uploaded image route
    Route::post('/image-save', 'NewsController@upload')->name('news.upload');
    Route::post('/image-slider-save', 'SliderController@slider_upload')->name('slider.slider_upload');
    Route::post('/image-project-save', 'ProjectsController@project_upload')->name('project.project_upload');
    Route::post('/image-product-save', 'ProductController@product_upload')->name('product.product_upload');
    Route::post('/image-pages-save', 'PagesController@pages_upload')->name('pages.pages_upload');
    Route::post('/image-user-save', 'DataUserController@user_upload')->name('datauser.user_upload');
    Route::post('/image-gallery-save', 'GalleryController@gallery_upload')->name('gallery.gallery_upload');
    Route::post('/image-menu-save', 'MenuController@upload')->name('menu.upload');
    Route::post('/image-article-save', 'ArticleController@upload')->name('publish.image-article-save');
//    statuses route
    Route::post('/project-status', 'ProjectsController@project_status')->name('project.project-status');
    Route::post('/dealership-status', 'DealershipsController@dealership_status')->name('dealership.dealership-status');
    Route::post('/pages-status', 'PagesController@pages_status')->name('pages.pages-status');
    Route::post('/faq-status', 'FaqController@faq_status')->name('faq.faq-status');
    Route::post('/menu-status', 'MenuController@menu_status')->name('menu.menu-status');
    Route::post('/gallery-status', 'GalleryController@gallery_status')->name('gallery.gallery-status');
    Route::post('/slider-status', 'SliderController@slider_status')->name('slider.slider-status');
    Route::post('article-status', 'ArticleController@update_status')->name('publish.article-status');
    Route::post('product-status', 'ProductController@product_status')->name('product.product-status');
    Route::post('/video-status', 'VideoController@video_status')->name('video.video-status');
    Route::post('/news_update_status', 'NewsController@update_status')->name('news.update_status ');
//deleted route
    Route::delete('/news-destroy/{id}', 'NewsController@destroy')->name('news.news-destroy');
    Route::delete('/article-destroy/{id}', 'ArticleController@destroy')->name('article.article-destroy');
    Route::delete('/dealership-destroy/{id}', 'DealershipsController@destroy')->name('dealership.dealership-destroy');
    Route::delete('/faq-destroy/{id}', 'FaqController@destroy')->name('faq.faq-destroy');
    Route::delete('/gallery-destroy/{id}', 'GalleryController@destroy')->name('gallery.gallery-destroy');
    Route::delete('/menu-destroy/{id}', 'MenuController@destroy')->name('menu.menu-destroy');
    Route::delete('/pages-destroy/{id}', 'PagesController@destroy')->name('pages.pages-destroy');
    Route::delete('/product-destroy/{id}', 'ProductController@destroy')->name('product.product-destroy');
    Route::delete('/project-destroy/{id}', 'ProjectsController@destroy')->name('project.project-destroy');
    Route::delete('/slider-destroy/{id}', 'SliderController@destroy')->name('slider.slider-destroy');
    Route::delete('/user-destroy/{id}', 'DataUserController@destroy')->name('user.user-destroy');
    Route::delete('/video-destroy/{id}', 'VideoController@destroy')->name('video.video-destroy');
    Route::delete('/user-destroy/{id}', 'UserController@destroy')->name('user.user-destroy');


//restore
    Route::get('/news-restore', 'NewsController@restore')->name('news.news-restore');

//    fill data table
    Route::get('/json-data', 'NewsController@fill')->name('news.json-data');
    Route::get('/json-data-article', 'ArticleController@fill')->name('article.json-data-article');
    Route::get('/json-data-dealership', 'DealershipsController@fill')->name('dealership.json-data-dealership');
    Route::get('/json-data-faq', 'FaqController@fill')->name('faq.json-data-faq');
    Route::get('/json-data-gallery', 'GalleryController@fill')->name('gallery.json-data-gallery');
    Route::get('/json-data-menu', 'MenuController@fill')->name('menu.json-data-menu');
    Route::get('/json-data-pages', 'PagesController@fill')->name('pages.json-data-pages');
    Route::get('/json-data-product', 'ProductController@fill')->name('product.json-data-product');
    Route::get('/json-data-project', 'ProjectsController@fill')->name('project.json-data-project');
    Route::get('/json-data-slider', 'SliderController@fill')->name('slider.json-data-slider');
    Route::get('/json-data-video', 'VideoController@fill')->name('video.json-data-video');


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
    Route::get('video', 'VideoController@show')->name('frontend.video.show');


});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
