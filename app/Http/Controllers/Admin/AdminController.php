<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SigninRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Cache;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('admin.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function signin(SigninRequest $request)
    {
        $filed = filter_var($request->get('user_mobile'),FILTER_VALIDATE_EMAIL)? 'user_name':'user_mobile';
        $request->merge([$filed=>$request->get('user_mobile')]);

        if(Auth::attempt($request->only($filed,'password'))){
            if(Auth::user()->user_role==User::ROLE_MANAGE or Auth::user()->user_role==User::ROLE_MANAGE_USER){
                $accessToken = [ 'accessToken' => str_random(60),'userMobile' => Auth::user()->user_mobile,'userID'=>Auth::user()->user_id ];
                Cache::add('access_token',$accessToken,User::CACHE_TIME);
                return redirect('admin/index');
            }

            return redirect('admin/login')->with('message', '手机号或者密码错误！');
        }
        return redirect('admin/login')->with('message', '手机号或者密码错误！');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        if ($user['user_role'] == User::ROLE_MANAGE){
            $user_manage = User::where('user_role',User::ROLE_MANAGE)->orWhere('user_role',User::ROLE_MANAGE_USER)->get();
        }else{
            $user_manage = User::where('user_role',User::ROLE_MANAGE_USER)->get();
        }
        return view('admin.manage_list',compact('user_manage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function logout(Request $request)
    {
        Cache::pull('access_token');
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect('/admin/login')->with('message', '退出成功！');
    }
}
