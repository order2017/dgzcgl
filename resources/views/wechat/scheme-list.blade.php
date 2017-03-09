@extends('layouts.wechat')
@section('content')
    <div class="weui_cells_title">推荐方案</div>
    <div class="weui_panel weui_panel_access">
        <div class="weui_panel">
            <div class="weui_panel_bd">
                <div class="weui_media_box weui_media_text">
                    <h4 class="weui_media_title">上班族方案-上班族</h4>
                    <p class="weui_media_desc">适合人群：上班族、公司是发现金的</p>
                    <p class="weui_media_desc">特点：要求低</p>
                </div>
            </div>
        </div>
        <a href="{{ route('wechat.scheme-detail') }}" class="weui_panel_ft">方案详情</a>
    </div>

    <div class="weui_panel weui_panel_access">
        <div class="weui_panel">
            <div class="weui_panel_bd">
                <div class="weui_media_box weui_media_text">
                    <h4 class="weui_media_title">有车族方案-押证不押车不装GPS贷</h4>
                    <p class="weui_media_desc">适合人群：有车族</p>
                    <p class="weui_media_desc">特点：不装GPS</p>
                </div>
            </div>
        </div>
        <a href="{{ route('wechat.scheme-detail') }}" class="weui_panel_ft">方案详情</a>
    </div>

    <div class="weui_panel weui_panel_access">
        <div class="weui_panel">
            <div class="weui_panel_bd">
                <div class="weui_media_box weui_media_text">
                    <h4 class="weui_media_title">银行方案-二次装修贷</h4>
                    <p class="weui_media_desc">适合人群：有房族</p>
                    <p class="weui_media_desc">特点：利息贷</p>
                </div>
            </div>
        </div>
        <a href="{{ route('wechat.scheme-detail') }}" class="weui_panel_ft">方案详情</a>
    </div>

    <div class="weui_panel weui_panel_access">
        <div class="weui_panel">
            <div class="weui_panel_bd">
                <div class="weui_media_box weui_media_text">
                    <h4 class="weui_media_title">有房族方案-有房族信用贷</h4>
                    <p class="weui_media_desc">适合人群：有房族</p>
                    <p class="weui_media_desc">特点：纯信用</p>
                </div>
            </div>
        </div>
        <a href="{{ route('wechat.scheme-detail') }}" class="weui_panel_ft">方案详情</a>
    </div>

@endsection