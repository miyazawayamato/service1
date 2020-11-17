<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qualification;
use App\Models\Experience;
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
    public function edit($id) {
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
            $uppost->qualification_id = $request->qualification_id;
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
    
    public function delete($id) {
        $post = Experience::findOrFail($id);//取得
        
        if($post->user_id == Auth::id()) {
        Experience::destroy($post);//削除
        return redirect('/mypage');//リダイレクト
        } else {
            return redirect()->back();
        }
    }
}
