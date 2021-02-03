<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostForm;//バリデーション

use App\Models\Experience;
use App\Models\Qualification;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PostformController extends Controller
{
    //投稿画面表示
    public function postform(Request $request) {
        $id = $request->id;
        $quali = Qualification::find($id);
        $user_id = Auth::id();
        $user = User::find($user_id);
        return view('postform',['user' => $user, 'quali' => $quali]);
    }
    
    //資格選択
    public function select() {
        $qualis = Qualification::all();
        return view('qselect', ['qualis' => $qualis]);
    }
    
    //投稿メソッド
    public function posting(PostForm $request) {
        $request->validated();
        
        //ユーザーid取得 それぞれを入れるメソッド
        
        Experience::create([
            'user_id' => Auth::id(),
            'qualification_id' => $request->qualification_id,
            'period' => $request->period,
            'time' => $request->time,
            'how' => $request->how,
            'profession' => $request->profession,
            'purpose' => $request->purpose,
            'material' => $request->material,
            'body' => $request->body,
        ]);//追加
        
        return view('trial');

    }
    
}
