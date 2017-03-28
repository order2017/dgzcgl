@extends('layouts.admin')
@section('content')
    <!-- content start -->
    <div class="admin-content">
        <div class="admin-content-body">
            <div class="am-cf am-padding">
                <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">客户列表</strong></div>
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
                            <th>客户姓名</th>
                            <th>客户手机号</th>
                            <th>推荐人</th>
                            <th>推荐时间</th>
                            <th>办理状态</th>
                            <th>管理</th>
                        </tr>
                        </thead>

                        <tbody>
                        @if(empty($client))
                        @foreach($client as $list)
                        <tr>
                            <td>{{ $list['client_id'] }}</td>
                            <td>{{ $list['client_name'] }}</td>
                            <td>{{ $list['client_mobile'] }}</td>
                            <td>{{ $list['user_name'] }}</td>
                            <td>{{ $list['created_at'] }}</td>
                            <td>{{ $list['client_status'] }}</td>
                            <td>
                                <button class="am-btn am-btn-xs am-btn-success" data-am-modal="{target: '#doc-modal-clientShow-{{ $list['client_id'] }}', closeViaDimmer: 0, width: 630, height: 260}">详情</button>
                                @include('include._client_show')
                            </td>
                        </tr>
                        @endforeach
                            @else
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @include('include/_footer')
    </div>
    <!-- content end -->
@endsection