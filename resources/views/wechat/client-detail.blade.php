@extends('layouts.wechat')
@section('content')
    {{--<div class="weui_cells">
        <div class="weui_cell">
            <div class="weui_cell_bd weui_cell_primary">
                <p>我的客户详情</p>
            </div>
        </div>
    </div>--}}
    <div class="weui_cells_title">我的客户详情</div>
    <div class="weui_panel">
        <div class="weui_panel_hd">客户名：{{ $client['client_name'] }}</div>
        <div class="weui_panel_bd">
            <div class="weui_media_box weui_media_text">
                <p class="weui_media_desc"> {{ $client['info_source'] }} </p>
                <ul class="weui_media_info">
                    <li class="weui_media_info_meta">录入时间 {{ $client['updated_at'] }}</li>
                    @if($client['status']=='1')
                    <li class="weui_media_info_meta weui_media_info_meta_extra" style="color:red;">{{ $client['client_status'] }}</li>
                        @else
                        <li class="weui_media_info_meta weui_media_info_meta_extra" style="color:green;">{{ $client['client_status'] }}</li>
                    @endif
                </ul>
            </div>
        </div>
    </div>

@endsection