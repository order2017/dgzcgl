<?php

namespace App\Http\Controllers\Admin;

use App\Client;
use App\Commission;
use App\Info;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientController extends Controller
{
    public function index(){
        $client =Client::all();
        foreach ($client as $client_list){
           $info = Info::where('client_id',$client_list['client_id'])->get();
           $comm =Commission::where('client_id',$client_list['client_id'])->get();
           $res[]=[
                'client_id'=>$client_list['client_id'],
                'client_name'=>$client_list['client_name'],
                'client_mobile'=>$client_list['client_mobile'],
                'user_name'=>$client_list['user_name'],
                'user_mobile'=>$client_list['user_mobile'],
                'created_at'=>$client_list['created_at'],
                'client_status'=>$client_list['client_status_text'],
                'info_quota'=>$info[0]['info_quota'],
                'info_unit'=>$info[0]['info_unit']==1 ? '万' : '元',
                'info_notice'=>$info[0]['info_notice']==1 ? '是' : '否',
                'comm_number'=>$comm[0]['comm_number'],
                'comm_unit'=>$info[0]['comm_unit']==1 ? '万' : '元',
           ];
        }
        return view('admin.client-list',['client'=>$res]);
    }
}
