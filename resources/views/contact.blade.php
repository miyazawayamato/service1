@extends('common.main')
@section('title', 'お問い合わせ')
@section('stylesheet')
{{-- <link rel="stylesheet" href="{{ asset('css/quali/quali.css') }}"/> --}}
@endsection

@section('main')
    <h2>お問い合わせ</h2>
    <form method="POST" action="{{ route('contact.send') }}">
        @csrf
        <input name="email" value="{{ old('email') }}" type="text" placeholder="メール">
        {{-- <section>
            <option value="">お問い合わせ</option>
            <option value="">ご意見</option>
            <option value="">不備・エラー報告</option>
        </section> --}}
        {{-- <input type="email"> --}}
        <input type="text" name="name" placeholder="なまえ">
        <textarea name="body" id="" cols="30" rows="10"></textarea>
        <button>送信</button>
    </form>
@endsection