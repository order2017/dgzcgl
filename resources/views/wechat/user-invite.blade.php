@extends('layouts.wechat')
@section('content')
    <div class="bd">
        <div class="msg">
            <div class="weui_msg">
                <div class="weui_icon_area"><i class="weui_icon_success weui_icon_msg"></i></div>
                <div class="weui_text_area">
                    <h2 class="weui_msg_title">扫描成功</h2>
                    <p class="weui_msg_desc">即将成为<font color="red">{{ session('wechat_user')[0]['user_name']=="" ? session('wechat_user')[0]['wechat_nickname'] : session('wechat_user')[0]['user_name'] }}</font>下线发展合伙人</p>
                </div>

                {!! Form::open(['route'=>'wechat.user-invite','method'=>'POST']) !!}
                <div class="weui_opr_area">
                    <p class="weui_btn_area">
                        <input type="hidden" name="user_parent_id" value="{{ $user_parent_id }}">
                        <input type="hidden" name="user_id" value="{{ session('wechat_user')[0]['user_id'] }}">
                        <button  class="weui_btn weui_btn_primary" style="background-color:#4c97e8;">确定</button>
                        <a href="{{ route('wechat.user-list') }}" class="weui_btn weui_btn_default">取消</a>
                    </p>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
