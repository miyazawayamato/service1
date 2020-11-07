@extends('common.main')
@section('title', '掲示板')
@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/board/board.css') }}"/>
<link rel="stylesheet" href="{{ asset('css/quali/quali.css') }}"/>
@endsection

@section('main')
  <div class="quali-top">
    <h2 class="shikaku">資格名がは</h2>
    <table>
      <tr>
        <th>受験日</th>
        <th>合格率</th>
        <th>資格区分</th>
      </tr>
      <tr>
        <td>10月中旬</td>
        <td>10%前後(約2000人)</td>
        <td>民間</td>
      </tr>
    </table>
  </div>
  <div class="accordion">
    <input id="acd-check1" class="acd-check" type="checkbox">
    <label class="acd-label" for="acd-check1">詳しい情報</label>
      <div class="acd-content">
        <p>ここに軽い説明文が入りますここに軽い説明文が入りますここに軽い説明文が入りますここに軽い説明文が入りますここに軽い説明文が入りますここに軽い説明文が入りますここに軽い説明文が入りますここに軽い説明文が入ります</p>
      </div>
  </div>  
  <div class="switch-menu">
    <a href="{{route('experiences', [$id])}}" class="switch" >体験談一覧</a>
    <a href="#">掲示板へ</a>
  </div>
  <div class="article-top">
    <p>投稿フォーム</p>
    <form action="{{route('boardadd')}}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$id}}">
      <div class="nickname">
        <span>ニックネーム</span>
        <input type="text" name="name">
        @if ($errors->has('name'))
          <p>{{$errors->first('name')}}</p>
        @endif
      </div>
      <div class="form-text">
        <span>投稿内容</span>
        <textarea name="message"></textarea>
        @if ($errors->has('message'))
          <p>{{$errors->first('message')}}</p>
        @endif
      </div>
      <div class="btn">
        <button type="submit">投稿</button>
      </div>
    </form>
  </div>
  <div class="article-main">
    <div class="article">
      <div class="link">
        {{ $comments->links('vendor.pagination.semantic-ui') }}
      </div>
      <ul>
        @foreach ($comments as $comment)
        <li>
          <section>
            <div class="comment-top">
              <span>{{$comment->id}}</span>
              <span class="name">{{$comment->name}}</span>
              <div class="comment-info">
                <time>{{$comment->created_at}}</time>
                <span class="report">報告する</span>
              </div>
            </div>
            <div class="comment-main">
              <p>{{$comment->message}}</p>
            </div>
            <div class="comment-under">
              <span><i class="fas fa-check"></i>役立ち</span>
            </div>
          </section>
        </li>
        @endforeach
      </ul>
      <div class="link">
        {{ $comments->links('vendor.pagination.semantic-ui') }}
      </div>
    </div>
    
  </div>
@endsection