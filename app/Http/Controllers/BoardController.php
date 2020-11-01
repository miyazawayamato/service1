<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Board;

class BoardController extends Controller
{
    //一覧メニュー表示
    public function show($id) {
        //swithcになおした方がよさそう
        if ($id == 1) {
            // orderBy(対象カラム,順番)asc昇順desc降順
            $comments = Board::orderBy('id', 'desc')->Paginate(15);
            return view('board', ['comments' => $comments, 'id' => $id]);
        } else {
            return($id);
        }
    }
    
    //追加処理
    public function add(Request $request) {
        $inputs = $request->all();
        //分岐加える
        Board::create($inputs);//追加
        return redirect('/board/1');//リダイレクト id注意
        // return redirect()->route('profile', ['id' => 1]);
    }
}
