@extends('layouts.wechat')
@section('content')
    <div class="bd">
        <div class="weui_cells_title">我的二维码</div>
        <div class="weui_grids">
        <article class="weui_article">
            <section>
                <section>
                    <p style="text-align: center;">
                        <img src="{{ asset('build/wechat/images/qucode.png') }}" alt="" width="300">
                    </p>
                </section>
            </section>
        </article>
        </div>
    </div>
@endsection
