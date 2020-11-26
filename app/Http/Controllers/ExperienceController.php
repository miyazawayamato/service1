<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qualification;
use App\Models\Experience;

use App\Models\User;

class ExperienceController extends Controller
{
    //一覧 公開してない
    public function Reports() {
        return view('reports');
    }
    
    //資格ページ 体験談一覧表示
    public function showList($id) {
        
        
        //$idは資格種類の主キー
        //資格情報の取得
        $quali = Qualification::find($id);
        
        $exps = Experience::where('qualification_id', $id)->orderBy('id', 'desc')->Paginate(15);
        
        
        
        return view('experiences', ['id' => $id, 'exps' => $exps,'quali' => $quali]);
    }
    
    //上下別のコントローラーがいい？
    
    //個別
    public function show($id, $qualiexp_id) {
        
        //改善できそう?
        
        $texts = Experience::find($qualiexp_id);
        //$textsでカラムを取得しー＞でuseridを取得
        $userid = $texts->user_id;
        //そのuseridでuserテーブルからnameを取得
        $name = User::find($userid)->name;
        return view('experience',['texts' => $texts, 'name' => $name]);
    }
}
