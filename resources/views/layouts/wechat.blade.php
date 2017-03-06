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

@yield('content')

<div style="height:60px;"></div>
<div style="position: fixed; bottom:0px; width: 100%;">
    <div class="weui_tabbar">
        <a href="/" class="weui_tabbar_item">
            <div class="weui_tabbar_icon">
                <img src="{{ url('build/wechat/images/icon_nav_button.png') }}" alt="">
            </div>
            <p class="weui_tabbar_label">首页</p>
        </a>
        <a href="{{ route('wechat.client-status-list') }}" class="weui_tabbar_item">
            <div class="weui_tabbar_icon">
                <img src="{{ url('build/wechat/images/icon_nav_article.png') }}" alt="">
            </div>
            <p class="weui_tabbar_label">客户状态</p>
        </a>
        <a href="{{ route('wechat.user-list') }}" class="weui_tabbar_item">
            <div class="weui_tabbar_icon">
                <img src="{{ url('build/wechat/images/icon_nav_cell.png') }}" alt="">
            </div>
            <p class="weui_tabbar_label">我的信息</p>
        </a>
    </div>
</div>

</body>
<script src="{{ url('build/wechat/js/jquery-1.7.1.min.js') }}"></script>
<script src="{{ url('build/wechat/js/example.js') }}"></script>
</html>