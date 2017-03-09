@extends('layouts.wechat')
@section('content')
    <div class="weui_cells_title">更改用户信息</div>
    <div class="container" id="container">
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
    {!! Form::open(['route'=>'wechat.user-edit','files'=>'true','data-am-validator']) !!}
    <div class="weui_grids">
        <div class="weui_cell">
            <div class="weui_cell_hd">{!! Form::label('user_name','姓名',['class'=>'weui_label']) !!}</div>
            <div class="weui_cell_bd weui_cell_primary">
                {!! Form::text('user_name',$user['user_name'],['class'=>'weui_input','placeholder'=>'请输入真实姓名']) !!}
                <input type="hidden" name="user_id" value="{{ $user['user_id'] }}">
            </div>
        </div>
        <div class="weui_cell weui_cell_select weui_select_after">
            <div class="weui_cell_hd">
                <label for="" class="weui_label">性别</label>
            </div>
            <div class="weui_cell_bd weui_cell_primary">
                <select class="weui_select" name="user_sex">
                    <option value="{{ $user['user_sex'] }}">{{ $user_sex }}</option>
                    <option value="0">保密</option>
                    <option value="1">男</option>
                    <option value="2">女</option>
                </select>
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
                {!! Form::number('user_mobile',$user['user_mobile'],['class'=>'weui_input','placeholder'=>'请输入用户手机号','pattern'=>'[0-9]*']) !!}
            </div>
        </div>
    </div>
    <div class="weui_btn_area">
        <button class="weui_btn weui_btn_default" type="submit" style="background-color:#4c97e8; color:white;">确定</button>
    </div>
    {!! Form::close() !!}
    <div class="weui_btn_area">
        <a class="weui_btn weui_btn_default" href="{{ route('wechat.user-list') }}">返回</a>
    </div>
@endsection