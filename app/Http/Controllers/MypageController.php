<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class MypageController extends Controller
{
    //mypage 
    public function show() {
        
        $id = Auth::id();
        $posts = User::find($id)->experience;
        
        // $abc = User::find($id)->experience->select('body')->get();
        
        // dd($abc);
        return view('mypage',['posts' => $posts]);
    }
    
    //編集ページ
    public function edit() {
        //変数=定義した親モデル::クエリ->定義したメソッド名
        
        return view('editmypage',);
    }
}
