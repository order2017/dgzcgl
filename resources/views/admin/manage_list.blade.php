@extends('layouts.admin')
@section('content')
    <!-- content start -->
    <div class="admin-content">
        <div class="admin-content-body">
            <div class="am-cf am-padding">
                <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">管理员列表</strong></div>
            </div>

            <div class="am-g">
                <div class="am-u-sm-12">
                    <table class="am-table am-table-bd am-table-striped admin-content-table">
                        <thead>
                        <tr>
                            <th>ID</th><th>管理员姓名</th><th>用户登录手机号</th><th>性别</th><th>级别</th><th>创建时间</th><th>管理</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($user_manage as $list)
                            <tr>
                                <td>{{ $list['user_id'] }}</td>
                                <td>{{ $list['user_name'] }}</td>
                                <td>{{ $list['user_mobile'] }}</td>
                                <td>{{ $list['user_sex_text'] }}</td>
                                <td>{{ $list['user_role_text'] }}</td>
                                <td>{{ $list['updated_at'] }}</td>
                                <td>
                                    <button class="am-btn am-btn-xs am-btn-success" data-am-modal="{target: '#doc-modal-updateUser-1', closeViaDimmer: 0, width: 420, height: 306}">修改</button>
                                    <a href="#" class="am-btn am-btn-xs am-btn-danger" style="color:white;">删除</a>
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