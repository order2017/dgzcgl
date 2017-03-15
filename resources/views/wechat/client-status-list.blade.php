@extends('layouts.wechat')
@section('content')
    <div class="weui_cells_title">我的客户列表</div>
    <div class="weui_cells weui_cells_access">
        @foreach($client as $list)
        <a class="weui_cell" href="{{ route('wechat.client-detail',['client_id'=>$list['client_id']]) }}">
            <div class="weui_cell_hd"><img src="{{ asset('build/wechat/images/'.session('wechat_user')[0]['user_avatar'].'') }}" alt="" width="45px" height="45px"></div>
            <div class="weui_cell_bd weui_cell_primary">
                <p style="font-size: 14px; margin-left: 10px;">客户姓名：{{ $list['client_name'] }} </p>
                @if($list['client_status']==1)
                <p style="font-size: 14px; margin-left: 10px;">客户状态： <font style="color:red;">{{ $list['client_status_text'] }}</font></p>
                    @else
                    <p style="font-size: 14px; margin-left: 10px;">客户状态： <font style="color:green;">{{ $list['client_status_text'] }}</font></p>
                    @endif
            </div>
            <span class="weui_cell_ft"></span>
        </a>
        @endforeach
    </div>

@endsection