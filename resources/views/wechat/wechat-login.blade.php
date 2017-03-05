@extends('layouts.wechat')
@section('content')
    <div class="bd">
        <div class="container" id="container">
            <div class="msg">
                <div class="weui_msg">
                    <section>
                        <p style="text-align: center;">
                            <img src="{{ asset('build/wechat/images/qucode.png') }}" alt="" width="200">
                        </p>
                    </section>
                    <div class="weui_text_area">
                        <h2 class="weui_msg_title">微信登录</h2>
                    </div>
                    <div class="weui_opr_area">
                        <p class="weui_btn_area">
                            <a href="javascript:;" class="weui_btn weui_btn_plain_primary" style="width: 200px;">确定</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

