<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//追加
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Http\Requests\Contact;//バリデーション


class ContactController extends Controller
{
    //入力フォーム
    public function form() {
        return view('contact');
    }
    
    //確認画面
    public function confirm(Contact $request) {
        $validated = $request->validated();
        
        $inputs = $request->all();
        
        return view('contactconfirm', ['inputs' => $inputs]);
    }
    
    //送信メソッド
    public function send(Request $request) {
        
        $action = $request->input('action');
        $input  = $request->except('action');
        
        //bladeのbuttonに属性追加
        if($action === 'submit') {
            // メール送信
            //toに送信
            // Mail::to($input['email'])->send(new ContactMail($input));
            Mail::to('official@dokusika.deca.jp')->bcc($request->email)->send(new ContactMail($input));
            $request->session()->regenerateToken();
            return view('trial');
        } else {
            return view('home');
        }
        
        
        
        //再送信を防ぐためにトークンを再発行
        //$request->session()->regenerateToken();
        //送信完了ページのviewを表示
        //return view('trial');
            
        
    }
    //apiメールメソッド
    public function apiSend(Contact $request) {
        $validated = $request->validated();
        $input  = $request->except('action');
        Mail::to('official@dokusika.deca.jp')->bcc($request->email)->send(new ContactMail($input));
        return true;
    }
}
