<?php

namespace App\Http\Controllers\Wechat;

use App\Client;
use App\Http\Requests\ClientRequest;
use App\Info;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('wechat.client-list');
    }

    public function store(ClientRequest $request)
    {
        $userId = $request->get('user_id');
        $clientName = $request->get('client_name');
        $infoQuota = $request->get('info_quota');
        $infoUnit = $request->get('info_unit');
        $clientMobile = $request->get('client_mobile');
        $infoRemark = $request->get('info_remark');
        $infoNotice = $request->get('info_notice');
        $client = Client::where('client_mobile',$clientMobile)->exists();
        if ($client){
            return redirect('/client-list')->with('message','推荐客户手机号存在！');
        }
        $client_id = DB::table('clients')->insertGetId(
            ['user_id' => $userId, 'client_name' =>$clientName,'client_mobile'=>$clientMobile]
        );
        $result = Info::create([
            'client_id' =>$client_id,
            'info_quota' =>$infoQuota,
            'info_unit' =>$infoUnit,
            'info_remark' =>$infoRemark,
            'info_source' =>date('Y')."年".date('m')."月".date('d')."日 报备客户",
            'info_notice' =>$infoNotice or 0
        ]);
        if ($result){
            return redirect('/client-list')->with('message','推荐成功！');
        }else{
            return redirect('/client-list')->with('message','推荐失败！');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ClientStatus()
    {
        $client = Client::all();
        return view('wechat.client-status-list',['client' => $client ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ClientDetail()
    {
        $client = Client::where('client_id',\Request::get('client_id'))->get();
        return view('wechat.client-detail',['client'=> $client ]);
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
}
