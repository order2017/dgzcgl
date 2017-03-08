@extends('layouts.wechat')
@section('content')
    <div class="bd">
        <div class="container" id="container">
            <div class="weui_cells_title">注册</div>
            {!! Form::open(['route'=>'wechat.wechat-register','method'=>'POST','class'=>'am-form','data-am-validator']) !!}
            <div class="weui_cells weui_cells_form">
                <div class="weui_cell weui_vcode">
                    <div class="weui_cell_hd"><label class="weui_label">手机</label></div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <input class="weui_input" type="number" name="user_mobile" placeholder="请输入手机号">
                    </div>
                    <div class="weui_cell_ft">
                        <a href="javascript:;" class="weui_btn weui_btn_mini weui_btn_default" style="margin: 10px;">获取验证码</a>
                    </div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_hd"><label class="weui_label">验证码</label></div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <input class="weui_input" type="number" name="user_code" pattern="[0-9]*" placeholder="请输入手机验证码">
                    </div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_hd"><label class="weui_label">密码</label></div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <input class="weui_input" type="number" name="user_password" pattern="[0-9]*" placeholder="请输入密码">
                    </div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_hd"><label class="weui_label">昵称</label></div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <input class="weui_input" type="text" name="user_name" placeholder="请输入昵称或姓名">
                    </div>
                </div>
                <div class="weui_cell weui_cell_select weui_select_after">
                    <div class="weui_cell_hd">
                        <label for="" class="weui_label">性别</label>
                    </div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <select class="weui_select" name="user_sex">
                            <option value="0">保密</option>
                            <option value="1">男</option>
                            <option value="2">女</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="weui_btn_area">
                <button class="weui_btn weui_btn_default" href="javascript:" id="showTooltips" style="background-color:#4c97e8; color:white;">确定</button>
            </div>
            {!! Form::close() !!}
        <div class="weui_btn_area">
            <a class="weui_btn weui_btn_default" href="{{ route('wechat.wechat-login') }}" id="showTooltips">返回登录</a>
        </div>
        </div>
    </div>
@endsection

