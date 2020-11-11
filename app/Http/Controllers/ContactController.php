<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//追加
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;


class ContactController extends Controller
{
    //入力フォーム
    public function form() {
        return view('contact');
    }
    
    //送信メソッド
    public function send(Request $request) {
        //バリデーションを実行予定

        //フォームから受け取ったactionの値を取得
        // $action = $request->input('action');
        
        //フォームから受け取ったactionを除いたinputの値を取得
        $inputs = $request->except('action');

        // //actionの値で分岐
        // if($action !== 'submit'){
        //     // return redirect()
        //     //     ->route('contact')
        //     //     ->withInput($inputs);
        //     return view('home');

        // } else {
            //入力されたメールアドレスにメールを送信
        Mail::to($inputs['email'])->send(new ContactMail($inputs));
        
        
        
        //再送信を防ぐためにトークンを再発行
        $request->session()->regenerateToken();
        
        
        
        //送信完了ページのviewを表示
        return view('trial');
            
        
    }
}