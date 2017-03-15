<?php

namespace App\Http\Controllers\Wechat;

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

        $client_id = DB::table('clients')->insertGetId(
            ['user_id' => $userId, 'client_name' =>$clientName,'client_mobile'=>$clientMobile]
        );
        $result = Info::create([
            'client_id' =>$client_id,
            'info_quota' =>$infoQuota,
            'info_unit' =>$infoUnit,
            'info_remark' =>$infoRemark,
            'info_notice' =>$infoNotice
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
        return view('wechat.client-status-list');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ClientDetail()
    {
        return view('wechat.client-detail');
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
