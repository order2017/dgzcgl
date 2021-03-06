<?php

namespace App\Http\Controllers\Wechat;

use App\Http\Requests\UpdateRequest;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = (User::find(session('wechat_user')[0]['user_id']))->toArray();
        $user_info =[
            'user_id' => $user['user_id'],
            'user_name' => $user['user_name'] ? $user['user_name'] : $user['wechat_nickname'],
            'user_avatar' => $user['wechat_headimgurl'] ? $user['wechat_headimgurl'] : asset('build/wechat/images/'.$user['user_avatar'].''),
            'user_mobile' => $user['user_mobile'],
            'username' => $user['user_name']
        ];
        $user_sex = $this->sex($user['user_sex']);
        return view('wechat.user-list',['user'=>$user_info,'sex'=>$user_sex]);
    }

    public function userQrcode(Request $request)
    {
        $qrcode_pictrue = public_path('build/wechat/images/qrcode'.$request->get('user_id').'.png');
        if(!file_exists($qrcode_pictrue)){
            $url= 'http://'.$request->getHttpHost().'/user-invite?user_parent_id='.$request->get('user_id');
            QrCode::encoding('UTF-8')->format('png')->size(300)->merge('/public/build/wechat/images/avatar.png',.15)->generate($url,public_path('build/wechat/images/qrcode'.$request->get('user_id').'.png'));
        }
        return view('wechat.user-qrcode',['user_id'=>$request->get('user_id')]);
    }

    public function userInvite(Request $request)
    {
        $user_parent_id = $request->get('user_parent_id');
        return view('wechat.user-invite',['user_parent_id'=>$user_parent_id]);
    }

    public function userInviteStore(Request $request){
        $user = User::find($request->get('user_id'));
        $user->user_parent_id = $request->get('user_parent_id');
        $user->save();
        return redirect('user-list');
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
    public function edit(UpdateRequest $request)
    {
        $userName = $request->get('user_name');
        $userID = $request->get('user_id');
        $userMobile = $request->get('user_mobile');
        $userSex = $request->get('user_sex');

        $flight = User::find($userID);
        $flight->user_name= $userName;
        $flight->user_mobile= $userMobile;
        $flight->user_sex= $userSex;
        $res = $flight->save();
        if ($res) return redirect()->back()->with('message','更新成功！');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $user =(User::find($id))->toArray();
        $user_sex = $this->sex($user['user_sex']);
        return view('wechat.user-update',['user'=>$user,'user_sex'=>$user_sex]);
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

    //封装方法
    protected function sex($user_sex){
        switch ($user_sex)
        {
            case 0 :
               return $user_sex = "保密";
                break;
            case 1:
                return $user_sex = "男";
                break;
            case 2:
                return $user_sex = "女";
                break;
        }
    }
}
