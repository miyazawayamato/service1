<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GyouseisyosiTable;
use App\Models\SihousyosiTable;

class PostformController extends Controller
{
    //投稿画面表示
    public function postform() {
        return view('postform');
    }
    
    //投稿メソッド
    public function posting(Request $request) {
        $id = $request->qualiexp_id;
        $inputs = $request->all();
        //モデルで指定をしっかりする。主キーはしない。fillable
        switch ($id) {
            case 1: 
                SihousyosiTable::create($inputs);//追加
            break;
            case 2: 
                GyouseisyosiTable::create($inputs);//追加
            break;
            case 3: 
                return($id);
            break;
            default: 
            return('失敗しました');
        }
        return view('trial');
        // return view('experience', [$id]);
    }
    
}
