@extends('layouts.wechat')
@section('content')
    <div class="weui_cells_title">我的信息</div>
    <div class="weui_cells weui_cells_access">
        <a class="weui_cell" href="{{ route('wechat.user-qrcode',['user_id'=>$user['user_id']]) }}">
            <div class="weui_cell_hd"><img src="{{ $user['user_avatar'] }}" alt="" style="width:35px;margin-right:5px;display:block"></div>
            <div class="weui_cell_bd weui_cell_primary">
                <p>{{ $user['user_name'] }}</p>
            </div>
            <div class="weui_cell_ft">二维码码</div>
        </a>
    </div>

    <div class="weui_panel">
        <div class="weui_panel_hd">真实名：{{ $user['username'] or "未填写" }}</div>
        <div class="weui_panel_hd">性别：{{ $sex }}</div>
        <div class="weui_panel_hd">手机号：{{ $user['user_mobile'] or "未填写" }}</div>
    </div>
    <div class="weui_panel weui_panel_access">
        <a href="{{ route('wechat.user-update',['id'=>$user['user_id']]) }}" class="weui_panel_ft">完善用户资料</a>
    </div>
@endsection