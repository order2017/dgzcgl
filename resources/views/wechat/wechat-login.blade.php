@extends('layouts.wechat')
@section('content')
    <div class="bd">
        <div class="container" id="container">
            <div class="weui_cells_title">登录</div>
            <div class="weui_cells weui_cells_form">
                <div class="weui_cell">
                    <div class="weui_cell_hd"><label class="weui_label">账号</label></div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <input class="weui_input" type="number" pattern="[0-9]*" placeholder="请输入手机号">
                    </div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_hd"><label class="weui_label">密码</label></div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <input class="weui_input" type="number" pattern="[0-9]*" placeholder="请输入密码">
                    </div>
                </div>
            </div>
        </div>
        <div class="weui_btn_area">
            <a class="weui_btn weui_btn_default" href="javascript:" id="showTooltips" style="background-color:#4c97e8; color:white;">确定</a>
            <a class="weui_btn weui_btn_default" href="{{ route('wechat.wechat-register') }}" id="showTooltips">立即注册</a>
                <div class="button_sp_area">
                    <a href="javascript:;" class="weui_btn weui_btn_mini weui_btn_primary" style="background-color:#4c97e8; color:white;">微信登录</a>
                    <a href="javascript:;" class="weui_btn weui_btn_mini weui_btn_default" style="background-color:#4c97e8; color:white;">QQ登录</a>
                </div>
        </div>
    </div>
@endsection

