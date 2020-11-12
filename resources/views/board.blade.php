@extends('common.main')
@section('title', '掲示板')
@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/board/board.css') }}"/>
<link rel="stylesheet" href="{{ asset('css/quali/quali.css') }}"/>
@endsection

@section('main')
  <div class="quali-top">
    <h2 class="shikaku">{{$quali->certificate}}</h2>
    <table>
      <tr>
        <th>受験日</th>
        <th>合格率</th>
        <th>資格区分</th>
      </tr>
      <tr>
        <td>{{$quali->time}}</td>
        <td>{{$quali->passrate}}</td>
        <td>{{$quali->class}}</td>
      </tr>
    </table>
  </div>
  <div class="accordion">
    <input id="acd-check1" class="acd-check" type="checkbox">
    <label class="acd-label" for="acd-check1">詳しい情報</label>
      <div class="acd-content">
        <p>今後の情報追加をお待ちください。</p>
      </div>
  </div>  
  <div class="switch-menu">
    <a href="{{route('experiences', [$id])}}" class="switch" >体験談一覧</a>
    <a href="#">掲示板へ</a>
  </div>
  <div class="article-top">
    <p class="board-form-tittle">投稿フォーム</p>
    <form action="{{route('boardadd')}}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$id}}">
      <div class="nickname">
        <span>ニックネーム</span>
        <input type="text" name="name" value="{{old('name')}}" placeholder="10字以内">
        @if ($errors->has('name'))
          <p style="color: red">{{$errors->first('name')}}</p>
        @endif
      </div>
      <div class="form-text">
        <span>投稿内容</span>
        <textarea name="message" placeholder="150字以内" onkeyup="ShowLength(value);">{{old('message')}}</textarea>
        <p id="inputlength">0文字</p>
        @if ($errors->has('message'))
          <p style="color: red">{{$errors->first('message')}}</p>
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
                <time>{{$comment->created_at->format('Y/n/d-H時i分')}}</time>
                <span class="report">報告する</span>
              </div>
            </div>
            <div class="comment-main">
              <p>{{$comment->message}}</p>
            </div>
            <div class="comment-under">
              <span><i class="fas fa-check"></i>役立ち</span>
            </div>
            {{-- <div class="comment-under">
              @if($reply->is_liked_by_auth_user())
                <a href="{{ route('reply.unlike', ['id' => $reply->id]) }}" class="btn btn-success btn-sm">いいね<span class="badge">{{ $reply->likes->count() }}</span></a>
              @else
                <a href="{{ route('reply.like', ['id' => $reply->id]) }}" class="btn btn-secondary btn-sm">いいね<span class="badge">{{ $reply->likes->count() }}</span></a>
              @endif
            </div> --}}
          </section>
        </li>
        @endforeach
      </ul>
      <div class="link">
        {{ $comments->links('vendor.pagination.semantic-ui') }}
      </div>
    </div>
  </div>
  <script src="{{ asset('js/count.js') }}"></script>
@endsection