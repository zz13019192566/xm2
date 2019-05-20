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

//路由组设置

//后台的登录页面
Route::get('admin/login','Admin\Users\AdminloginController@login');
Route::post('admin/dologin','Admin\Users\AdminloginController@dologin');
Route::get('admin/captcha','Admin\Users\AdminloginController@captcha');// 验证码



//
//后台
Route::group(['middleware'=>'login'],function(){
    //后台首页
    Route::get('admins','Admin\IndexController@index');
    //退出
    Route::get('admin/logout','Admin\Users\AdminloginController@logout');
    //后台管理员 
    Route::resource('/admin/user','Admin\UserController');
});

// 前台首页

Route::get('/', 'Home\IndexController@index');
// 前台
Route::group([],function(){

});

//读取配置文件的信息
Route::get('/config', function () {

	//返回页面信息  echo  return

    //获取配置信息  Config类名
    // echo Config::get('app.timezone');

    // echo Config::get('app.web_name');

    // echo Config::get('database.migrations');

    //获取环境配置信息
    //env  是laravel框架的辅助函数
    // 

    echo env('DB_DATABASE');
});
