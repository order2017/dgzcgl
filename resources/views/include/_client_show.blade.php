
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
                    <td class="am-warning">办理状态：</td><td>{{ $list['client_status'] }}</td>
                </tr>
                <tr>
                    <td class="am-warning">是否告知：</td><td>{{ $list['info_notice'] }}</td>
                    <td class="am-warning">我的佣金：</td><td>{{ $list['comm_number'] }} {{ $list['info_unit'] }}</td>
                </tr>
                <tr>
                    <td class="am-warning">推荐姓名：</td><td>{{ $list['user_name'] }}</td>
                    <td class="am-warning">手机号：</td><td>{{ $list['user_mobile'] }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>