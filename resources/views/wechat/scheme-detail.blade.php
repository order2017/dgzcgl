@extends('layouts.wechat')
@section('content')
    <div class="weui_cells">
        <div class="weui_cell">
            <div class="weui_cell_bd weui_cell_primary">
                <p>方案详情</p>
            </div>
        </div>
    </div>

    <article class="weui_article">
        <section>
            <section>
                <h3>上班族方案-上班族</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute</p>
                <p>
                    <img src="{{ asset('build/wechat/images/weui.png') }}" alt="">
                    <img src="{{ asset('build/wechat/images/weui.png') }}" alt="">
                </p>
            </section>
        </section>
    </article>

@endsection