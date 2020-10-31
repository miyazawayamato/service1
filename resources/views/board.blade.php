@extends('common.main')
@section('title', '掲示板')
@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/board/board.css') }}"/>
@endsection

@section('main')
    <div class="article-top">
      
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