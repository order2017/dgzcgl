@extends('layouts.admin')
@section('content')
    <!-- content start -->
    <div class="admin-content">
        <div class="admin-content-body">
            <div class="am-cf am-padding">
                <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">用户列表</strong></div>
            </div>

            <div class="am-u-sm-12 am-u-md-12" style="margin-top:-10px;padding-bottom: 16px;">
                <a href="" class="am-btn am-btn-default am-fr am-btn-sm" style="margin-left: 6px;">刷新</a>
                <button type="button" class="am-btn am-fr am-btn-primary am-btn-sm" data-am-modal="{target: '#doc-modal-searchUser', closeViaDimmer: 0, width: 420, height: 420}">搜索</button>
            </div>

            <div class="am-g">
                <div class="am-u-sm-12">
                    <table class="am-table am-table-bd am-table-striped admin-content-table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>用户头像</th>
                            <th>用户姓名</th>
                            <th>用户手机号</th>
                            <th>性别</th>
                            <th>级别</th>
                            <th>创建时间</th>
                            <th>管理</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($user as $list)
                        <tr>
                            <td>{{ $list['user_id'] }}</td>
                            @if($list['wechat_headimgurl'])
                            <td><img src="{{ $list['wechat_headimgurl'] }}" alt="" width="30px"></td>
                            @else
                            <td><img src="{{ asset('build/wechat/images/'.$list['user_avatar'].'') }}" alt="" width="30px"></td>
                            @endif
                            <td>{{ $list['user_name'] ? $list['user_name'] : $list['wechat_nickname'] }}</td>
                            <td>{{ $list['user_mobile'] or "未填写" }}</td>
                            <td>{{ $list['user_sex_text'] }}</td>
                            <td>{{ $list['user_role_text'] }}</td>
                            <td>{{ $list['updated_at'] }}</td>
                            <td>
                                <div class="am-dropdown" data-am-dropdown>
                                    <button class="am-btn am-btn-default am-btn-xs am-dropdown-toggle" data-am-dropdown-toggle><span class="am-icon-cog"></span> <span class="am-icon-caret-down"></span></button>
                                    <ul class="am-dropdown-content">
                                        <li><a href="#">1. 编辑</a></li>
                                        <li><a href="#">2. 下载</a></li>
                                        <li><a href="#">3. 删除</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
        @include('include/_footer')
    </div>
    <!-- content end -->
@endsection