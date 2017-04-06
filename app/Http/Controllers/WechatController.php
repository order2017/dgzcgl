<?php

namespace App\Http\Controllers;

use EasyWeChat\Foundation\Application;
use Illuminate\Support\Facades\Config;
use App\User;

class WechatController extends Controller
{
    public function serve(){
        $options =Config::get('wechat');
        $app = new Application($options);
        $server = $app->server;
        $user = $app->user;
        $server->setMessageHandler(function($message) use ($user) {
            switch ($message->MsgType) {
                case 'event':
                    # 事件消息...
                    return "欢迎关注广东贷款网";
                    break;
            }
        });
        $server->serve()->send();
    }

    //封装方法
    public function config(){
        $options =Config::get('wechat');
        $app = new Application($options);
        $oauth = $app->oauth;
        return $oauth;
    }

    //第二步:写访问登陆，并且判断是否未登陆和已经登陆
    public function login(){
        $oauth = $this->config();
        // 未登录
        if (!session()->has('target_user')) {
            return $oauth->redirect();
        }
        // 已经登录过
        session('wechat_user_session');
    }

    //第一步:写登陆授权获取用户信息保存到SESSION中，并且跳转登陆访问
    public function oauth_callback(){
        $oauth = $this->config();
        // 获取 OAuth 授权结果用户信息
        $user = $oauth->user();
        session(['wechat_user_session' => $user->toArray()]);
        //第三步:采用SESSION获取用户openID查询用户详细信息，并且保存数据库，跳转登陆成功！
        $sess = session('wechat_user_session');
        $openId =$sess['id'];
        $options =Config::get('wechat');
        $app = new Application($options);
        $userService = $app->user;
        $res = $userService->get($openId)->toArray();
        //查询数据当前用户OPENID是否存在，如果存在直接跳转，不存在添加数据跳转
        $row = User::where('wechat_openid',$res['openid'])->first();
        if (isset($row)){
            $data_row[] = $row->toArray();
            session(['wechat_user' =>$data_row]);
        }else{
            //添加User数据
            $user = new User();
            $user->wechat_openid = $res['openid'];
            $user->wechat_nickname = $res['nickname'];
            $user->user_sex = $res['sex'];
            $user->wechat_headimgurl = $res['headimgurl'];
            $user->user_type = User::USER_TYPE_WECHAT;
            $user->save();
            $data_user[] = $user->getQueueableId();
            session(['wechat_user' =>$data_user]);
        }
        return redirect('/index');
    }

}
