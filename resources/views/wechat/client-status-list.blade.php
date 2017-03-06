@extends('layouts.wechat')
@section('content')
    <div class="weui_cells">
        <div class="weui_cell">
            <div class="weui_cell_bd weui_cell_primary">
                <p>我的客户列表</p>
            </div>
        </div>
    </div>

    <div class="weui_cells weui_cells_access">
        <a class="weui_cell" href="{{ route('wechat.client-detail') }}">
            <div class="weui_cell_hd"><img src="{{ asset('build/wechat/images/ava.png') }}" alt="" width="45px" height="45px"></div>
            <div class="weui_cell_bd weui_cell_primary">
                <p style="font-size: 14px; margin-left: 10px;">客户姓名：陈小龙 </p>
                <p style="font-size: 14px; margin-left: 10px;">客户状态： <font style="color:green;">已办结</font></p>
            </div>
            <span class="weui_cell_ft"></span>
        </a>

        <a class="weui_cell" href="{{ route('wechat.client-detail') }}">
            <div class="weui_cell_hd"><img src="{{ asset('build/wechat/images/ava.png') }}" alt="" width="45px" height="45px"></div>
            <div class="weui_cell_bd weui_cell_primary">
                <p style="font-size: 14px; margin-left: 10px;">客户姓名：习近平 </p>
                <p style="font-size: 14px; margin-left: 10px;">客户状态： <font style="color:red;">申办中...</font></p>
            </div>
            <span class="weui_cell_ft"></span>
        </a>
    </div>

@endsection