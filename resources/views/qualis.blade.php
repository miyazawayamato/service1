@extends('common.main')
@section('title', '資格一覧')
@section('stylesheet')
  <link rel="stylesheet" href="{{ asset('css/qualis/qualis.css') }}"/>
@endsection

@section('main')
    <h2>資格一覧</h2>
    <div class="qualis-main">
      <h3>法律系一覧</h3>
      <ul class="qualis-menu">
        <li class="quali-box"><a href="{{ route('quali', ['id' => 1])}}" class="quali">司法書士</a><a href="{{route('board', ['id' => 1])}}" class="board-root">資格資格掲示板へ</a><a href="{{route('experiences', ['id' => 1])}}" class="exp-root">資格資格体験談へ</a><a href="#" class="post-roof">投稿する</a></li>
        <li class="quali-box"><a href="{{ route('quali', ['id' => 2])}}" class="quali">行政書士</a><a href="#" class="board-root">資格資格掲示板へ</a><a href="#" class="exp-root">資格資格体験談へ</a><a href="#" class="post-roof">投稿する</a></li>
        <li class="quali-box"><a href="{{ route('quali', ['id' => 3])}}" class="quali">税理士</a><a href="#" class="board-root">資格資格掲示板へ</a><a href="#" class="exp-root">資格資格体験談へ</a><a href="#" class="post-roof">投稿する</a></li>
        <li class="quali-box"><a href="#" class="quali">資格資格</a><a href="#" class="board-root">しかくの掲示板へ</a><a href="#" class="exp-root">シカクノ体験談へ</a><a href="#" class="post-roof">投稿する</a></li>
        <li class="quali-box"><a href="#" class="quali">資格資格</a><a href="#" class="board-root">しかくの掲示板へ</a><a href="#" class="exp-root">シカクノ体験談へ</a><a href="#" class="post-roof">投稿する</a></li>
        <li class="quali-box"><a href="#" class="quali">資格資格</a><a href="#" class="board-root">しかくの掲示板へ</a><a href="#" class="exp-root">シカクノ体験談へ</a><a href="#" class="post-roof">投稿する</a></li>
        <li class="quali-box"><a href="#" class="quali">資格資格</a><a href="#" class="board-root">しかくの掲示板へ</a><a href="#" class="exp-root">シカクノ体験談へ</a><a href="#" class="post-roof">投稿する</a></li>
        <li class="quali-box"><a href="#" class="quali">資格資格</a><a href="#" class="board-root">しかくの掲示板へ</a><a href="#" class="exp-root">シカクノ体験談へ</a><a href="#" class="post-roof">投稿する</a></li>
        <li class="quali-box"><a href="#" class="quali">資格資格</a><a href="#" class="board-root">しかくの掲示板へ</a><a href="#" class="exp-root">シカクノ体験談へ</a><a href="#" class="post-roof">投稿する</a></li>
        <li class="quali-box"><a href="#" class="quali">資格資格</a><a href="#" class="board-root">しかくの掲示板へ</a><a href="#" class="exp-root">シカクノ体験談へ</a><a href="#" class="post-roof">投稿する</a></li>
        <li class="quali-box"><a href="#" class="quali">資格資格</a><a href="#" class="board-root">しかくの掲示板へ</a><a href="#" class="exp-root">シカクノ体験談へ</a><a href="#" class="post-roof">投稿する</a></li>
        <li class="quali-box"><a href="#" class="quali">資格資格</a><a href="#" class="board-root">しかくの掲示板へ</a><a href="#" class="exp-root">シカクノ体験談へ</a><a href="#" class="post-roof">投稿する</a></li>
      </ul>
      <ul>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>
@endsection