<?php

namespace App\Http\Controllers\Wechat;

use App\Http\Requests\LoginSroteRequest;
use App\Http\Requests\RegisterRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('wechat.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    public function wechatLogin(){
        return view('wechat.wechat-login');
    }

    public function wechatLoginSrote(LoginSroteRequest $request){
        $mobile = $request->get('user_mobile');
        $password = $request->get('password');
        $user = User::where('user_mobile',$mobile)->get();
        if (isset($user[0]['user_mobile'])==$mobile && isset($user[0]['password'])==bcrypt($password)){
            session(['wechat_user'=>$user->toArray()]);
            return redirect('/');
        }else{
            return redirect()->back()->with('message','手机号或密码错误!');
        }
    }

    public function wechatRegister(){
        return view('wechat.wechat-register');
    }

    public function wechatRegisterStore(RegisterRequest $request){
        $mobile = $request->get('user_mobile');
        $usercode = $request->get('user_code');
        $password = $request->get('password');
        $name = $request->get('user_name');
        $sex = $request->get('user_sex');

        if (empty($usercode)){
            return redirect()->back()->with('message','验证码必填!');
        }elseif($usercode =='3366'){
            if (isset(User::where('user_mobile',$mobile)->get()[0]['user_mobile']) == $mobile){
                return redirect()->back()->with('message','手机号存在!');
            }
            User::create([
                'user_mobile' => $mobile,
                'password' => bcrypt($password),
                'user_name' => $name,
                'user_sex' => $sex,
                'wechat_openid'=> str_random(60),
                'user_avatar'=> 'avatar.png',
            ]);
            return redirect()->back()->with('message','注册成功!');
        }else{
            return redirect()->back()->with('message','验证码错误!');
        }
    }
}