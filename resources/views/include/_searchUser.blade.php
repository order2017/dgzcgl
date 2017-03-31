<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-searchUser">
    <div class="am-modal-dialog">
        <div class="am-modal-hd">
            <label>用户列表搜索</label>
            <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
        </div>
        <div class="am-modal-bd">
            {!! Form::open(['route'=>'admin.user-list','method'=>'GET','class'=>'am-form','data-am-validator']) !!}
            <fieldset>
                <div class="am-form-group" style="text-align: left;">
                    <div class="am-form-group">
                        {!! Form::label('user_name','用户名：') !!}
                        {!! Form::text('user_name',$search['user_name'],['placeholder'=>'输入用户名']) !!}
                    </div>
                    <div class="am-form-group">
                        {!! Form::label('user_mobile','手机号：') !!}
                        {!! Form::text('user_mobile',$search['user_mobile'],['placeholder'=>'输入手机号码']) !!}
                    </div>
                </div>
                {!! Form::submit('搜索',['class'=>'am-btn am-btn-primary am-btn-block']) !!}
                {!! Form::button('取消',['class'=>'am-btn am-btn-default  am-btn-block','data-am-modal-close']) !!}
            </fieldset>
            {!! Form::close() !!}
        </div>
    </div>
</div>