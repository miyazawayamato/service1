@extends('common.main')
@section('title', 'ホーム')
{{-- @section('stylesheet')
  <link rel="stylesheet" href="css/toiawase.css"/>
@endsection --}}
@section('main')
    <div class="main">
        <h1>これはメニューです</h1>
        <h2>ここにいろいろ追加予定です</h2>
        <a href="{{route('board')}}">掲示板（board）</a>
        <a href="{{route('article')}}">記事（article）</a>
    </div>
@endsection