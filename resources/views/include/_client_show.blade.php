
<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-clientShow-{{ $list['client_id'] }}">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">
            <label>客户信息显示</label>
            <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
        </div>
        <div class="am-modal-bd">
            <table class="am-table am-table-bordered" style="text-align: center;">
                <tr>
                    <td class="am-warning">客户姓名：</td><td>{{ $list['client_name'] }}</td>
                    <td class="am-warning">手机号：</td><td>{{ $list['client_mobile'] }}</td>
                </tr>
                <tr>
                    <td class="am-warning">贷款额度：</td><td>{{ $list['info_quota'] }} {{ $list['info_unit'] }}</td>
                    <td class="am-warning">办理状态：</td>
                    <td>
                        {!! Form::open(['url'=>'admin/client-list-status','method'=>'POST']) !!}
                        <input type="hidden" name="client_id" value="{{ $list['client_id'] }}"/>
                        <select id="doc-select-1" style="width:100px;height:23px; text-align: center; border:solid 1px #f2dede;" name="client_status">
                            @if($list['client_stat']==1)
                                <option value="1">已结办.</option>
                            @else
                                <option value="0">申办中...</option>
                            @endif
                            <option value="0">申办中...</option>
                            <option value="1">已结办</option>
                        </select>
                        <button type="submit" class="am-btn am-btn-default" style="width:50px;height:23px; border:solid 1px #f2dede; margin: 0; padding: 0;">提交</button>
                        {!! Form::close() !!}

                    </td>
                </tr>
                <tr>
                    <td class="am-warning">是否告知：</td><td>{{ $list['info_notice'] }}</td>
                    <td class="am-warning">我的佣金：</td>
                    <td>
                        {!! Form::open(['url'=>'admin/client-list-number','method'=>'POST']) !!}
                        <input type="text" style="width:50px;height:23px; border:solid 1px #f2dede; text-align: center;" name="comm_number" value="{{ $list['comm_number'] }}"/>
                        <input type="hidden" name="comm_id" value="{{ $list['comm_id'] }}"/>
                        <select id="doc-select-1" style="width:50px;height:23px; text-align: center; border:solid 1px #f2dede;" name="comm_unit">
                            @if($list['comm_unit']==1)
                                <option value="1">万</option>
                            @else
                                <option value="0">元</option>
                            @endif
                                <option value="0">元</option>
                                <option value="1">万</option>
                        </select>
                        <button type="submit" class="am-btn am-btn-default" style="width:50px;height:23px; border:solid 1px #f2dede; margin: 0; padding: 0;">提交</button>
                        {!! Form::close() !!}
                    </td>
                </tr>
                <tr>
                    <td class="am-warning">推荐姓名：</td><td>{{ $list['user_name'] }}</td>
                    <td class="am-warning">手机号：</td><td>{{ $list['user_mobile'] }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>