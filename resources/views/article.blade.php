@extends('common.main')
@section('title', '記事一覧')
@section('stylesheet')
  <link rel="stylesheet" href="{{ asset('css/article/article.css') }}"/>
@endsection

@section('main')
    <div class="main">
        <div class="left">
            <p>こんにちは</p>
            <div class="container">
                <dl>
                    @foreach ($articles as $article)
                        <dt>{{$article->tittle}}</dt>
                        <dd>{{$article->class}}</dd>
                    @endforeach
                </dl>
            </div>
        </div>
        
        <div class="right">
            <p>右</p>
        </div>
    </div>
@endsection