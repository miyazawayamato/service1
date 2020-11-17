<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'qualification_id' => 'required',
            'period' =>'required',
            'time' =>'required',
            'how' =>'required',
            'profession' =>'required',
            'purpose' =>'required|max:70',
            'material' =>'required|max:500',
            'body' => 'required|max:1500',
        ];
    }
    // エラーメッセージ
    public function messages()
    {
        return [
            'qualification_id.required' => '値を選択してください',
            'time.required' => '値を選択してください',
            'how.required' => '値を選択してください',
            'profession.required' => '値を選択してください',
            
            'period.required' => '内容を入力してください',
            'purpose.required' => '内容を入力してください', 
            'material.required' => '内容を入力してください',
            'body.required' => '内容を入力してください',
            'body.max' => '文字数がオーバーしています',
            'material.max' => '文字数がオーバーしています',
            'purpose.max' => '文字数がオーバーしています',
        ];
    }
}
