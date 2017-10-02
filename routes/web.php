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

Route::get('/', 'LoginController@index');
Route::get('admin', 'LoginController@index');
Route::get('Index/index', 'IndexController@index');
Route::post('/submit',function (){return view('index');});
Route::get('test', function (){
    return view('test');
});
// Admin 模块
//Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin.auth'], function () {
//    // 文章管理
//    Route::group(['prefix' => 'article'], function () {
//        // 文章列表
//        Route::get('index', 'ArticleController@index');
//        // 发布文章
//        Route::get('create', 'ArticleController@create');
//        // ...
//    });
//
//    // 分类管理
//    Route::group(['prefix' => 'category'], function () {
//        // 分类列表
//        Route::get('index', 'CategoryController@index');
//        // 添加分类
//        Route::get('create', 'CategoryController@create');
//    });
//});