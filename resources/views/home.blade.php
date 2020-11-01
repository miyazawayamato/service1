@extends('common.main')
@section('title', 'ホーム')
{{-- @section('stylesheet')
  <link rel="stylesheet" href="css/toiawase.css"/>
@endsection --}}
@section('main')
    <div class="main">
        <h1>これはメニューです</h1>
    </div>
    {{-- 一覧にする --}}
    {{-- <p><a href="{{route('board')}}">掲示板（board）</a></p> --}}
    <p><a href="{{route('article')}}">記事（article）</a></p>
    <p><a href="{{route('qualis')}}">資格一覧</a></p>
    {{-- <p><a href="{{route('experiences')}}">体験一覧</a></p> --}}
    {{-- <p><a href="{{route('experience')}}">体験</a></p> --}}
    <p><a href="{{route('postform')}}">投稿する</a></p>
@endsection