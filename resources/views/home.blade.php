@extends('common.main')
@section('title', 'ホーム')
@section('stylesheet')
  <link rel="stylesheet" href="{{ asset('css/home.css') }}"/>
@endsection
@section('main')
    <div class="main">
        <h1>これはメニューです</h1>
    </div>
    {{-- 一覧にする --}}
    <p><a href="{{route('article')}}">記事（article）</a></p>
    <p><a href="{{route('qualis')}}">資格一覧</a></p>
    <p><a href="{{route('postform')}}">投稿する</a></p>
    
    {{-- ログイン機能 --}}
    <div class="login">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">ログイン</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">新規登録</a>
                    @endif
                @endif
            </div>
        @endif
    </div>
@endsection