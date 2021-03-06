@extends('layouts.wechat')
@section('content')
    <div class="weui_cells_title">我的佣金</div>

    @foreach($client as $list)
    <div class="weui_panel">
        <div class="weui_panel_bd">
            <div class="weui_media_box weui_media_text">
                <p class="weui_media_desc" style="line-height: 23px;">客户名：{{ $list['client_name'] }}</p>
                <p class="weui_media_desc" style="line-height: 23px;">贷款额度：{{ $list['info_quota'] }} @if($list['info_unit']==0) 元 @else 万 @endif</p>
                <p class="weui_media_desc" style="line-height: 23px;">佣 金：{{ $list['comm_number'] }} @if($list['comm_unit']==0) 元 @else 万 @endif</p>
                <p class="weui_media_desc" style="line-height: 23px;">日 期：{{ $list['created_at'] }}</p>
                @if($list['comm_status']==1)
                <ul class="weui_media_info">
                    <li class="weui_media_info_meta">提现时间 {{ $list['updated_at'] }}</li>
                    <li class="weui_media_info_meta weui_media_info_meta_extra" style="color:green;">已提现</li>
                </ul>
                    @else
                    <div class="weui_btn_area">
                        <a class="weui_btn weui_btn_default" href="javascript:" id="showTooltips">申请提现</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
    @endforeach

   {{-- <div class="weui_panel">
        <div class="weui_panel_bd">
            <div class="weui_media_box weui_media_text">
                <p class="weui_media_desc" style="line-height: 23px;">客户名：陈小龙</p>
                <p class="weui_media_desc" style="line-height: 23px;">贷款额度：100 万</p>
                <p class="weui_media_desc" style="line-height: 23px;">佣 金：5000 元</p>
                <p class="weui_media_desc" style="line-height: 23px;">日 期：2017-03-06</p>
                <div class="weui_btn_area">
                    <a class="weui_btn weui_btn_default" href="javascript:" id="showTooltips">申请提现</a>
                </div>
            </div>
        </div>
    </div>--}}

@endsection