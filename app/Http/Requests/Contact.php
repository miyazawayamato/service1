<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Contact extends FormRequest
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
            'email' => 'required',
            'name' => 'required',
            'body' => 'required',
        ];
    }

    // エラーメッセージ
    public function messages()
    {
        return [
            'email.required' => '名前を入力してください',
            'name.required' => 'メールアドレスを入力してください',
            'body.required' => 'を入内容力してください',
        ];
    }
}
