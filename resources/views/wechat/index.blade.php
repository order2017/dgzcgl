@extends('layouts.wechat')
@section('content')
<div>
    <div class="weui_cell weui_cell_select weui_select_after">
        <div class="weui_cell_hd">
            <label for="" class="weui_label">城市/地区</label>
        </div>
        <div class="weui_cell_bd weui_cell_primary">
            <select class="weui_select" name="select2">
                <option value="1">东莞市</option>
                <option value="2">北京市</option>
                <option value="3">上海市</option>
            </select>
        </div>
    </div>
</div>

<div class="weui_grids">
    <a href="{{ route('wechat.client-list') }}" class="weui_grid js_grid">
        <div class="weui_grid_icon">
            <img src="{{ url('build/wechat/images/cha.jpg') }}" alt="">
        </div>
        <p class="weui_grid_label">推荐客户</p>
    </a>
    <a href="#" class="weui_grid js_grid" >
        <div class="weui_grid_icon">
            <img src="{{ url('build/wechat/images/wo.jpg') }}" alt="">
        </div>
        <p class="weui_grid_label">我的客户状态</p>
    </a>
    <a href="#" class="weui_grid js_grid">
        <div class="weui_grid_icon">
            <img src="{{ url('build/wechat/images/yong.jpg') }}" alt="">
        </div>
        <p class="weui_grid_label">我的佣金</p>
    </a>
    <a href="#" class="weui_grid js_grid">
        <div class="weui_grid_icon">
            <img src="{{ url('build/wechat/images/cha.jpg') }}" alt="">
        </div>
        <p class="weui_grid_label">推荐方案</p>
    </a>
    <a href="#" class="weui_grid js_grid">
        <div class="weui_grid_icon">
            <img src="{{ url('build/wechat/images/da.jpg') }}" alt="">
        </div>
        <p class="weui_grid_label">常见问题解答</p>
    </a>
    <a href="{{ route('wechat.user-list') }}" class="weui_grid js_grid">
        <div class="weui_grid_icon">
            <img src="{{ url('build/wechat/images/xin.jpg') }}" alt="">
        </div>
        <p class="weui_grid_label">我的信息</p>
    </a>
</div>
@endsection