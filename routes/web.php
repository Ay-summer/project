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
Route::get('/', function () {
    return view('welcome');
});
    // 登录和退出
    Route::resource('adminlogin','Admin\AdminloginController');
// 前台资源控制器 
Route::resource('/index','Homes\HomeController');
// 前台页面跳转控制器
Route::get('/login','Homes\HomeController@login');
Route::get('/shopcart','Homes\HomeController@shopcart');
Route::get('/commodity','Homes\HomeController@commodity');
Route::get('/buytoday','Homes\HomeController@buytoday');
Route::get('/information','Homes\HomeController@information');
Route::get('/about','Homes\HomeController@about');
Route::get('/register','Homes\HomeController@register');
    // 后台资源控制器
    Route::resource('/admin','Admin\AdminController');
    // 后台管理员控制器
    Route::resource('/admingly','Admin\AdminglyController');
    //订单
    Route::resource('/admindd','Admin\DingController');
    //前台接算
    Route::resource('/shopjs','Homes\ShopjsController');

    //支付
    Route::get("/zhifu","Homes\ShopjsController@zhifu");

    Route::group(['middleware'=>'login'],function(){

});
