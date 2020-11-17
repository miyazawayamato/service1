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
    public function postform() {
        
        $id = Auth::id();
        $user = User::find($id);
        
        $qualis = Qualification::all();
        
        return view('postform',['user' => $user, 'qualis' => $qualis]);
    }
    
    //投稿メソッド
    public function posting(PostForm $request) {
        $validated = $request->validated();
        $inputs = $request->all();//取得
        Experience::create($inputs);//追加
        return view('trial');
        // return view('experience', [$id]);
    }
    
}
