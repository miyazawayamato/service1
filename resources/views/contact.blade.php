@extends('common.main')
@section('title', 'ドクシカ/お問い合わせ')
@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/contact/contact.css') }}"/>
@endsection

@section('main')
    <h2 class="contact-tittle">お問い合わせ</h2>
    <form method="POST" action="{{ route('confirm') }}">
        @csrf
        
        <p class="item">メールアドレス</p>
        <input type="email" class="btn addres" placeholder="メールアドレス" value="{{ old('email') }}" name="email">
        @if ($errors->has('email'))
            <p style="color: red">{{$errors->first('email')}}</p>
        @endif
        <p class="item">名前</p>
        <input type="text" name="name" class="btn naming" value="{{ old('name') }}">
        @if ($errors->has('name'))
            <p style="color: red">{{$errors->first('name')}}</p>
        @endif
        <p class="item">内容</p>
        <textarea name="body" class="btn contact-body">{{ old('body') }}</textarea>
        @if ($errors->has('body'))
            <p style="color: red">{{$errors->first('body')}}</p>
        @endif
        <button>確認画面へ</button>
    </form>
@endsection
