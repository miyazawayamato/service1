@extends('common.main')
@section('title', '資格一覧')
@section('stylesheet')
  <link rel="stylesheet" href="{{ asset('css/qualis/qualis.css') }}"/>
@endsection

@section('main')
    <h2>資格一覧</h2>
    <a href="{{ route('quali', ['id' => 1])}}" class="quali">司法書士</a>
    <div class="qualis-main">
      <h3>法律系一覧</h3>
      <ul class="qualis-menu">
        @foreach ($qualis as $quali)
        <li class="quali-box">
          <span class="quali">{{$quali->certificate}}</span>
          <a href="{{route('board', ['id' => $quali->id])}}" class="board-root">資格資格掲示板へ</a>
          <a href="{{route('experiences', ['id' => $quali->id])}}" class="exp-root">資格資格体験談へ</a>
          <a href="{{route('postform')}}" class="post-roof">投稿する</a>
        </li>
        @endforeach
      </ul>
      <ul>
        <li></li>
        <li></li>
      </ul>
    </div>
@endsection