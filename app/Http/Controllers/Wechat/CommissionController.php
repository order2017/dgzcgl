<?php

namespace App\Http\Controllers\Wechat;

use App\Client;
use App\Commission;
use App\Info;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CommissionController extends Controller
{
    public function index(){

        $client = DB::table('clients')->Join('commissions', 'commissions.client_id', '=', 'clients.client_id')->where('clients.user_id',session('wechat_user')[0]['user_id'])->get();
        $res[]="";
        foreach ($client as $list){
            $info = Info::where('client_id',$list->client_id)->get();
            foreach ($info as $lien){
                $res[]=[
                    'client_name'=>$list->client_name,
                    'info_quota'=>$lien['info_quota'],
                    'info_unit'=>$lien['info_unit'],
                    'comm_number'=>$list->comm_number,
                    'comm_status'=>$list->comm_status,
                    'comm_unit'=>$list->comm_unit,
                    'created_at'=>$list->created_at,
                    'updated_at'=>$list->updated_at
                ];
            }
        }

        return view('wechat.commission-list',['client'=>array_filter($res)]);
    }

}
