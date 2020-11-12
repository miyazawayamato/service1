<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qualification;
use App\Models\SihousyosiTable;
use App\Models\GyouseisyosiTable;
use App\Models\User;

class ExperienceController extends Controller
{
    //一覧
    public function Reports() {
        return view('reports');
    }
    
    //一覧表示
    public function showList($id) {
        //$idは資格種類の主キー
        $quali = Qualification::find($id);
        
        switch ($id) {
            case 1:
                $exps = SihousyosiTable::all();
            break;
            case 2: 
                $exps = GyouseisyosiTable::all();
            break;
            case 3: 
                return($id);
            break;
            default: 
            return('失敗しました');
        }
        //名前の取得がしたい
        return view('experiences', ['id' => $id, 'exps' => $exps,'quali' => $quali]);
    }
    
    //上下別のコントローラーがいい？
    
    //個別
    public function show($id, $qualiexp_id) {
        switch ($id) {
            case 1:
                $texts = SihousyosiTable::find($qualiexp_id);
            break;
            case 2: 
                $texts = GyouseisyosiTable::find($qualiexp_id);
            break;
            case 3: 
                return($qualiexp_id);
            break;
            default: 
            return('失敗しました');
        }
        
        //$textsでカラムを取得しー＞でuseridを取得
        $userid = $texts->user_id;
        //そのuseridでuserテーブルからnameを取得
        $name = User::find($userid)->name;
        
        return view('experience',['texts' => $texts, 'name' => $name]);
    }
}
