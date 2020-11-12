@extends('common.main')
@section('title', 'ホーム')
@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/trial.css') }}"/>
@endsection
@section('main')
    <p>マイページはコンテンツをさらに追加予定です<br>今後の公開をお待ちください</p>
    
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button>ログアウト</button>
    </form>
    {{-- 認証しているかをはじく --}}
    <a href="{{route('edit')}}">体験談投稿履歴・編集ページへ移動</a>
@endsection