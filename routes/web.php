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

//前台 *******************
Route::get('/','Wechat\IndexController@index');
Route::name('wechat.wechat-login')->get('wechat-login','Wechat\IndexController@wechatLogin');

Route::middleware('active.nav')->name('wechat.user-list')->get('user-list','Wechat\UserController@index');

Route::middleware('active.nav')->name('wechat.user-qrcode')->get('user-qrcode','Wechat\UserController@userQrcode');

Route::middleware('active.nav')->name('wechat.client-list')->get('client-list','Wechat\ClientController@index');


//后台 *******************

Route::prefix('admin')->get('/', 'Admin\AdminController@login');
Route::prefix('admin')->get('login', 'Admin\AdminController@login');

Route::prefix('admin')->post('login', 'Admin\AdminController@signin');

Route::prefix('admin')->middleware('admin.login')->name('admin.index')->get('index','Admin\AdminController@index');

Route::prefix('admin')->middleware('admin.login')->name('admin.manage_list')->get('manage_list/{user_id}','Admin\AdminController@show');

Route::prefix('admin')->middleware('admin.login')->name('admin.logout')->get('logout','Admin\AdminController@logout');