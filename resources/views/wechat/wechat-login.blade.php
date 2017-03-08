<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <title>{{ trans('welcome.message') }}</title>
    <link rel="stylesheet" href="{{ url('build/wechat/css/weui.css') }}"/>
    <link rel="stylesheet" href="{{ url('build/wechat/css/weuia.css') }}"/>
</head>
<body>
<div>
    <img src="{{ url('build/wechat/images/photo.jpg') }}" width="100%" height="">
</div>

    <div class="bd">
        <div class="container" id="container">
            <div class="weui_cells_title">登录</div>
            @if (count($errors) > 0)
                <div class="weui_cells_title" style="color:red;">
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                </div>
            @elseif(Session::has('message'))
                <div class="weui_cells_title" style="color:red;">
                    {{Session::get('message')}}
                </div>
            @endif
            {!! Form::open(['route'=>'wechat.wechat-login','method'=>'POST','class'=>'am-form','data-am-validator']) !!}
            <div class="weui_cells weui_cells_form">
                <div class="weui_cell">
                    <div class="weui_cell_hd"><label class="weui_label">账号</label></div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <input class="weui_input" type="number" name="user_mobile" placeholder="请输入手机号">
                    </div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_hd"><label class="weui_label">密码</label></div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <input class="weui_input" type="password" name="password"  placeholder="请输入密码">
                    </div>
                </div>
            </div>
            <div class="weui_btn_area">
                <button class="weui_btn weui_btn_default" style="background-color:#4c97e8; color:white;">确定</button>
            </div>
            {!! Form::close() !!}
        </div>
        <div class="weui_btn_area">
            <a class="weui_btn weui_btn_default" href="{{ route('wechat.wechat-register') }}" id="showTooltips">立即注册</a>
                <div class="button_sp_area">
                    <a href="javascript:;" class="weui_btn weui_btn_mini weui_btn_primary" style="background-color:#4c97e8; color:white;">微信登录</a>
                    <a href="javascript:;" class="weui_btn weui_btn_mini weui_btn_default" style="background-color:#4c97e8; color:white;">QQ登录</a>
                </div>
        </div>
    </div>

</body>
</html>


