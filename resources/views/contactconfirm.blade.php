@extends('common.main')
@section('title', 'ドクシカ/お問い合わせ/確認画面')
@section('stylesheet')
{{-- <link rel="stylesheet" href="{{ asset('css/contact/contact.css') }}"/> --}}
@endsection

@section('main')
    <h2 class="contact-tittle">確認画面</h2>
    <form method="POST" action="{{ route('contact.send') }}">
    @csrf
        <h4>名前</h4>
        <p>{{ $inputs['name'] }}</p>
        <input type="hidden" name="name" value="{{ $inputs['name'] }}">
        <h4>メールアドレス</h4>
        <p>{{ $inputs['email'] }}</p>
        <input type="hidden" name="email" value="{{ $inputs['email'] }}">
        <h4>種類</h4>
        <p>{{ $inputs['select'] }}</p>
        <input type="hidden" name="select" value="{{ $inputs['select'] }}">
        <h4>内容</h4>
        <p>{{ $inputs['body'] }}</p>
        <input type="hidden" name="body" value="{{ $inputs['body'] }}">
        <button type="submit" name="action" value="submit">送信</button>
    </form>
@endsection