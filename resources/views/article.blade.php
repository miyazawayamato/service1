@extends('common.main')
@section('title', '記事一覧')
@section('stylesheet')
  <link rel="stylesheet" href="{{ asset('css/article/article.css') }}"/>
@endsection

@section('main')
    <div class="container">
        <dl>
            @foreach ($articles as $article)
            <div class="articles">
                <a href="#">
                    <div class="article">
                        <dt>{{$article->tittle}}</dt>
                        <dd>{{$article->class}}</dd>
                    </div>
                </a>
            </div>
            @endforeach
        </dl>
    </div>
    <div class="link">
        {{ $articles->links('vendor.pagination.semantic-ui') }}
    </div>
@endsection