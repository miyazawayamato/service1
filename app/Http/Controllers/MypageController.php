<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Experience;
use Illuminate\Support\Facades\Auth;

class MypageController extends Controller
{
    //mypage 
    public function show() {
        
        $user = Auth::user();
        
        
        $id = Auth::id();
        // $posts = User::find($id)->experiences;
        
        $posts = Experience::where('user_id', $id)->get();
        
        return view('mypage',[ 'user' => $user, 'posts' => $posts]);
    }
    
    //編集ページ
    public function edit() {
        //変数=定義した親モデル::クエリ->定義したメソッド名
        
        return view('editmypage',);
    }
}
