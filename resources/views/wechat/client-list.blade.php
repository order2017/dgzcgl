@extends('layouts.wechat')
@section('content')
    <div class="weui_cells_title">推荐客户</div>

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

    {!! Form::open(['route'=>'wechat.client-list','files'=>'true','data-am-validator']) !!}
    <div class="weui_grids">
        <div class="weui_cell">
            <div class="weui_cell_hd">
                {!! Form::label('client_name','客户姓名',['class'=>'weui_label']) !!}
                <input type="hidden" name="user_id" value="{{ session('wechat_user')['0']['user_id'] }}">
            </div>
            <div class="weui_cell_bd weui_cell_primary">
                {!! Form::text('client_name',null,['class'=>'weui_input','placeholder'=>'请输入客户姓名']) !!}
            </div>
        </div>

        <div class="weui_cell" style="margin: 0px; padding: 0 10px 0 14px;">
            <div class="weui_cell_hd">
                {!! Form::label('info_quota','贷款额度',['class'=>'weui_label']) !!}
            </div>
            <div class="weui_cell_bd weui_cell_primary">
                {!! Form::number('info_quota',null,['class'=>'weui_input','placeholder'=>'请输入贷款额度']) !!}
            </div>
            <div class="weui_cell_hd">
                <select class="weui_select" name="info_unit">
                    <option value="0">元</option>
                    <option value="1">万</option>
                </select>
            </div>
        </div>

        <div class="weui_cell weui_cell_select weui_select_before">
            <div class="weui_cell_hd">
                <select class="weui_select" name="client_mobile">
                    <option value="1">+86</option>
                    <option value="2">+80</option>
                    <option value="3">+84</option>
                    <option value="4">+87</option>
                </select>
            </div>
            <div class="weui_cell_bd weui_cell_primary">
                {!! Form::number('client_mobile',null,['class'=>'weui_input','pattern'=>'[0-9]*','placeholder'=>'请输入号码']) !!}
            </div>
        </div>

        <div class="weui_cell">
            <div class="weui_cell_bd weui_cell_primary">
                <textarea name="info_remark" class="weui_textarea" placeholder="请输入备注" rows="3"></textarea>
            </div>
        </div>

        <div class="weui_cells weui_cells_checkbox">
            <label class="weui_cell weui_check_label" for="s12">
                <div class="weui_cell_hd">
                    <input type="checkbox" name="info_notice" class="weui_check" id="s12" value="1">
                    <i class="weui_icon_checked"></i>
                </div>
                <div class="weui_cell_bd weui_cell_primary">
                    <p>是否已告知客户</p>
                </div>
            </label>
        </div>

    </div>
    <div class="weui_btn_area">
        <button class="weui_btn weui_btn_default" type="submit" id="showTooltips">马上提交</button>
    </div>
    {!! Form::close() !!}
@endsection