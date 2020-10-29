<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoardController extends Controller
{
    //一覧メニュー表示
    public function show() {
        return view('board');
    }
}
