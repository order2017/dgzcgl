<?php

namespace App\Http\Controllers\Wechat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OtherController extends Controller
{
    public function index(){
        return view('wechat.other-list');
    }

    public function Scheme(){
        return view('wechat.scheme-list');
    }

    public function SchemeDetail(){
        return view('wechat.scheme-detail');
    }
}
