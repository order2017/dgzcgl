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
        <div class="weui_panel_hd">客户名：{{ $client[0]['client_name'] }}</div>
        <div class="weui_panel_bd">
            <div class="weui_media_box weui_media_text">
                <p class="weui_media_desc">2017年03月06日 报备客户</p>
                <ul class="weui_media_info">
                    <li class="weui_media_info_meta">录入时间 2017-03-06 20:00:00</li>
                    <li class="weui_media_info_meta weui_media_info_meta_extra" style="color:green;">已办结</li>
                </ul>
            </div>
        </div>
    </div>

@endsection