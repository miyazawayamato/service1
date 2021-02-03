<?php

namespace App\Http\Controllers;

use App\Http\Requests\BoardPost;//バリデーション
use Illuminate\Http\Request;
use App\Models\Qualification;


use App\Models\Board;
use App\Models\User;


class BoardController extends Controller
{
    //一覧メニュー表示
    public function show($id) {
        //資格情報取得
        $quali = Qualification::find($id);
        
        $comments = Qualification::find($id)->message()->orderBy('id', 'desc')->Paginate(15);
        
        return view('board', ['comments' => $comments, 'id' => $id,'quali' => $quali]);
    }
    
    //追加処理
    public function add(BoardPost $request) {
        $request->validated();
        $id = $request->qualification_id;
        $inputs = $request->all();
        Board::create($inputs);//追加
        return redirect()->route('board', [$id]);
    }
}

