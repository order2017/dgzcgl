<?php

namespace App\Http\Controllers\Wechat;

use App\Client;
use App\Info;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommissionController extends Controller
{
    public function index(){

        $user =User::where('user_id',session('wechat_user')[0]['user_id'])->get();
        $client = Client::where('user_id',$user[0]['user_id'])->get();
        $res[]="";
        foreach ($client as $list){
            $info = Info::where('client_id',$list['client_id'])->get();
            foreach ($info as $lien){
                $res[]=[
                    'client_name'=>$list['client_name'],
                    'info_quota'=>$lien['info_quota'],
                ];
            }
        }
        
        return view('wechat.commission-list',['client'=>array_filter($res)]);
    }
}
