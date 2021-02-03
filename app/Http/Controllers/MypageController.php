<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qualification;
use App\Models\Experience;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PostForm;

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
    public function edit(Request $request) {
        $request->validate([
            'id' => 'integer',
        ]);
        $id = $request->id;
        $exp = Experience::find($id);
        $qualis = Qualification::all();
        if($exp->user_id == Auth::id()) {
            return view('editmypage',[ 'exp' => $exp, 'qualis' => $qualis]);
        } else {
            return redirect()->back();
        }
    }
    //編集メソッド
    public function update(PostForm $request, $id) {
        $uppost = Experience::findOrFail($id);
        
        
        if($uppost->user_id == Auth::id()) {
            $uppost->period = $request->period;
            $uppost->time = $request->time;
            $uppost->how = $request->how;
            $uppost->profession = $request->profession;
            $uppost->purpose = $request->purpose;
            $uppost->material = $request->material;
            $uppost->body = $request->body;
            $uppost->save();
            return view('trial');
        } else {
            return redirect()->back();
        }
    }
    //投稿削除
    public function delete(Request $request) {
        $id = $request->id;
        $post = Experience::findOrFail($id);//取得
        if($post->user_id == Auth::id()) {
            Experience::destroy($post->id);//削除
            return redirect()->route('dashboard');//リダイレクト
        } else {
            return redirect()->back();
        }
    }
    
    //名前変更
    public function name(Request $request) {
        $request->validate([
            'name' => 'required',
        ]);
        $id = Auth::id();
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->save();
        
        return redirect()->route('dashboard');//リダイレクト
    }
    
}
