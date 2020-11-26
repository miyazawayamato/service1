@extends('common.main')
@section('title', 'ドクシカ/記事一覧')
@section('stylesheet')
  <link rel="stylesheet" href="{{ asset('css/article/article.css') }}"/>
@endsection

@section('main')
    <h3 style="font-size: 40px">準備中です、今後の更新をお待ちください</h3>
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