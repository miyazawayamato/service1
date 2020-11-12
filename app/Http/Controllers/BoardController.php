<?php

namespace App\Http\Controllers;

use App\Http\Requests\BoardPost;//バリデーション
use Illuminate\Http\Request;
use App\Models\Qualification;

use App\Models\SihousyosiBoard;
use App\Models\GyouseisyosiBoard;


class BoardController extends Controller
{
    //一覧メニュー表示
    public function show($id) {
        //資格名取得
        $quali = Qualification::find($id);
        
        // orderBy(対象カラム,順番)asc昇順desc降順
        switch ($id) {
            case 1: 
                $comments = SihousyosiBoard::orderBy('id', 'desc')->Paginate(15);
            break;
            case 2: 
                $comments = GyouseisyosiBoard::orderBy('id', 'desc')->Paginate(15);
            break;
            case 3: 
                return($id);
            break;
            default: 
            return('失敗しました');
        }
        return view('board', ['comments' => $comments, 'id' => $id,'quali' => $quali]);
    }
    
    //追加処理
    public function add(BoardPost $request) {
        $validated = $request->validated();
        
        $id = $request->id;
        $inputs = $request->all();
        //idならその掲示板モデルに追加処理
        switch ($id) {
            case 1: 
                SihousyosiBoard::create($inputs);//追加
            break;
            case 2: 
                GyouseisyosiBoard::create($inputs);//追加
            break;
            case 3: 
                return($id);
            break;
            default: 
            return('失敗しました');
        }
        return redirect()->route('board', [$id]);
    }
}
