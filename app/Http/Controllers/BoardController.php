<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;

class BoardController extends Controller
{
    //一覧メニュー表示
    public function show() {
        
        //orderBy(対象カラム,順番)asc昇順desc降順
        $comments = Board::orderBy('id', 'desc')->Paginate(15);
        
        return view('board',compact('comments'));
    }
}
