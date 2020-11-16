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
    public function edit($id) {
        
        $exp = Experience::find($id);
        return view('editmypage',[ 'exp' => $exp]);
    }
    
    public function update(Request $request, $id) {
        $uppost = Experience::findOrFail($id);
        
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
    }
    
    public function delete($id) {
        $post = Experience::findOrFail($id);//取得
        Experience::destroy($post);//削除
        return redirect('/mypage');//リダイレクト
    }
}
