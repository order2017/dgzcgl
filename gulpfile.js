const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
    /*mix.sass('app.scss')
       .webpack('app.js');*/


    //拷贝妹子CSS
    mix.styles([
        'resources/assets/amazeui/css/admin.css',
    ], 'public/css/admin.css', './');

    mix.styles([
        'resources/assets/amazeui/css/amazeui.css',
        'resources/assets/amazeui/css/amazeui.flat.css',
        'resources/assets/amazeui/css/app.css',
    ], 'public/css/all.css', './');

    //拷贝妹子JS
    mix.scripts([
        'resources/assets/amazeui/js/amazeui.ie8polyfill.js',
        'resources/assets/amazeui/js/amazeui.js',
        'resources/assets/amazeui/js/amazeui.widgets.helper.js',
        'resources/assets/amazeui/js/app.js',
        'resources/assets/amazeui/js/handlebars.min.js',
        'resources/assets/amazeui/js/jquery.min.js'
    ], 'public/js/all.js', './');

    mix.scripts([
        'resources/assets/amazeui/js/jquery.min.js'
    ], 'public/js/jquery.js', './');

    //拷贝妹子样式版本
    mix.version(['css/all.css','css/admin.css', 'js/all.js','js/jquery.js'], 'public/build');
    //拷贝妹子字体
    mix.copy('resources/assets/amazeui/fonts', 'public/build/fonts');
    //拷贝妹子图片
    mix.copy('resources/assets/amazeui/images', 'public/build/images');
    //拷贝弹层样式
    mix.copy('resources/assets/layer', 'public/build/layer');
    //拷贝微信样式
    mix.copy('resources/assets/wechat', 'public/build/wechat');

});
