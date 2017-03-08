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

/***************  前台 *******************/

//微信首页
Route::middleware('active.nav')->name('wechat.index')->get('index','Wechat\IndexController@index');

//微信提交Token验证
Route::any('weixin', 'WechatController@serve');
//微信登陆
Route::any('login', 'WechatController@login');
//微信获取授权
Route::any('oauth_callback', 'WechatController@oauth_callback');

//微信登录页面
Route::name('wechat.wechat-login')->get('/','Wechat\IndexController@wechatLogin');
Route::name('wechat.wechat-login')->get('wechat-login','Wechat\IndexController@wechatLogin');
Route::name('wechat.wechat-login')->post('wechat-login','Wechat\IndexController@wechatLoginSrote');

//微信注册页面
Route::name('wechat.wechat-register')->get('wechat-register','Wechat\IndexController@wechatRegister');
Route::name('wechat.wechat-register')->post('wechat-register','Wechat\IndexController@wechatRegisterStore');

//用户列表页面
Route::middleware('active.nav')->name('wechat.user-list')->get('user-list','Wechat\UserController@index');

//用户二维码页面
Route::middleware('active.nav')->name('wechat.user-qrcode')->get('user-qrcode','Wechat\UserController@userQrcode');

//客户列表页面
Route::middleware('active.nav')->name('wechat.client-list')->get('client-list','Wechat\ClientController@index');

//常见问题解答页面
Route::middleware('active.nav')->name('wechat.other-list')->get('other-list','Wechat\OtherController@index');

//推荐方案页面
Route::middleware('active.nav')->name('wechat.scheme-list')->get('scheme-list','Wechat\OtherController@Scheme');

//方案详情页面
Route::middleware('active.nav')->name('wechat.scheme-detail')->get('scheme-detail','Wechat\OtherController@SchemeDetail');

//客户状态页面
Route::middleware('active.nav')->name('wechat.client-status-list')->get('wechat.client-status-list','Wechat\ClientController@ClientStatus');

//客户详情页面
Route::middleware('active.nav')->name('wechat.client-detail')->get('wechat.client-detail','Wechat\ClientController@ClientDetail');

//佣金页面
Route::middleware('active.nav')->name('wechat.commission-list')->get('wechat.commission-list','Wechat\CommissionController@index');



/***************  后台  *******************/

//后台登录页面
Route::prefix('admin')->get('/', 'Admin\AdminController@login');
Route::prefix('admin')->get('login', 'Admin\AdminController@login');
Route::prefix('admin')->post('login', 'Admin\AdminController@signin');

//后台登录首页
Route::prefix('admin')->middleware('admin.login')->name('admin.index')->get('index','Admin\AdminController@index');

//后台用户管理列表
Route::prefix('admin')->middleware('admin.login')->name('admin.manage_list')->get('manage_list/{user_id}','Admin\AdminController@show');

//后台用户退出页面
Route::prefix('admin')->middleware('admin.login')->name('admin.logout')->get('logout','Admin\AdminController@logout');