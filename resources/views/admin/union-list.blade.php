@extends('layouts.admin')
@section('content')
    <!-- content start -->
    <div class="admin-content">
        <div class="admin-content-body">
            <div class="am-cf am-padding">
                <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">合伙人列表</strong></div>
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
                            <th>我的上级</th>
                            <th>创建时间</th>
                            <th>管理</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($union_user as $list)
                        <tr>
                            <td>{{ $list['user_id'] }}</td>
                            <td><img src="{{ $list['user_avatar'] }}" alt="" width="30px"></td>
                            <td>{{ $list['user_name'] }}</td>
                            <td>{{ $list['user_mobile'] or "未填写" }}</td>
                            <td>{{ $list['user_parent_name'] }}</td>
                            <td>{{ $list['updated_at'] }}</td>
                            <td>
                                @if($list['user_parent_id']==$list['user_id'])
                                    <a href="#" class="am-btn am-btn-xs am-btn-default" style="color:white;">解除合伙人</a>
                                @else
                                    {!! Form::open(['route'=>'admin.union-remove','method'=>'post','class'=>'am-inline']) !!}
                                    {!! Form::hidden('user_id',$list['user_id']) !!}
                                    {!! Form::submit('解除合伙人',['class'=>'am-btn am-btn-xs am-btn-danger']) !!}
                                    {!! Form::close() !!}
                                @endif
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