@extends('layouts.wechat')
@section('content')
    <div class="weui_cells weui_cells_access">
        <a class="weui_cell" href="{{ route('wechat.user-qrcode') }}">
            <div class="weui_cell_hd"><img src="{{ asset('build/images/favicon.png') }}" alt="" style="width:35px;margin-right:5px;display:block"></div>
            <div class="weui_cell_bd weui_cell_primary">
                <p>我的信息</p>
            </div>
            <div class="weui_cell_ft">二维码码</div>
        </a>
    </div>
    <br>
    {!! Form::open(['files'=>'true','data-am-validator']) !!}
    <div class="weui_grids">
        <div class="weui_cell">
            <div class="weui_cell_hd">
                {!! Form::label('user_nickname','' ? '合伙人':'报备人',['class'=>'weui_label']) !!}
            </div>
            <div class="weui_cell_bd weui_cell_primary">
                {!! Form::text('user_nickname','',['class'=>'weui_input','disabled']) !!}
                {!! Form::hidden('user_id','') !!}
            </div>
        </div>
        <div class="weui_cell">
            <div class="weui_cell_hd">{!! Form::label('user_name','真实姓名',['class'=>'weui_label']) !!}</div>
            <div class="weui_cell_bd weui_cell_primary">
                {!! Form::text('user_name','',['class'=>'weui_input','placeholder'=>'请输入真实姓名']) !!}
            </div>
        </div>
        <div class="weui_cell weui_cell_select weui_select_before">
            <div class="weui_cell_hd">
                <select class="weui_select" name="select2">
                    <option value="1">+86</option>
                    <option value="2">+80</option>
                    <option value="3">+84</option>
                    <option value="4">+87</option>
                </select>
            </div>
            <div class="weui_cell_bd weui_cell_primary">
                {!! Form::number('user_mobile','',['class'=>'weui_input','placeholder'=>'请输入用户手机号','pattern'=>'[0-9]*']) !!}
            </div>
        </div>
    </div>
    <div class="weui_btn_area">
        <button class="weui_btn weui_btn_default" type="submit" id="showTooltips">提交用户</button>
    </div>
    {!! Form::close() !!}
@endsection