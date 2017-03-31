<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UnionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $union_users[]='';
        foreach ($user as $list){
            $user_parent= User::where('user_parent_id',$list['user_id'])->get();
            foreach ($user_parent as $parent_list){
                $union_users[]= [
                    'user_id'=>$parent_list['user_id'],
                    'user_avatar'=>$parent_list['wechat_headimgurl'] ? $parent_list['wechat_headimgurl'] : asset('build/wechat/images/'.$parent_list['user_avatar'].''),
                    'user_name'=>$parent_list['user_name'] ? $parent_list['user_name'] : $parent_list['wechat_nickname'],
                    'user_mobile'=>$parent_list['user_mobile'],
                    'user_parent_id'=>$parent_list['user_parent_id'],
                    'updated_at'=>$parent_list['updated_at'],
                    'user_parent_name'=>$list['user_name'] ? $list['user_name'] : $list['wechat_nickname'],
                ];
            }
        }
        $union_user = array_filter($union_users);
        return view('admin.union-list',compact('union_user'));
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
    public function remove(Request $request)
    {
        if (!empty($request->get('user_id'))){
            $user = User::find($request->get('user_id'));
            $user->user_parent_id =0;
            $user->save();
        }
        return redirect('admin/union-list');
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
