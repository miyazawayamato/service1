@extends('common.main')
@section('title', '体験談一覧')
@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/experiences/experiences.css') }}"/>
@endsection
@section('main')
    <div class="main-menu">
        <a href="#">体験談一覧</a>
        <a href="{{route('board', $id)}}">掲示板</a>
    </div>
    <h2>体験談一覧</h2>
    @for($i =  0; $i < 11; $i++)
    <div class="exp-box">
        <p><a href="{{route('experience')}}">体験談へ</a></p>
        <dl>
            <dt>投稿者名{{ $i }}番目</dt>
            <dd>更新日</dd>
            <dd>文章を少しンぐ文章を少しンぐ文章を少しンぐ文章を少しンぐ文章を少しンぐ文章を少しンぐ文章を少しンぐ文章を少しンぐ文章を少しンぐ文章を少しンぐ文章を少しンぐ文章を少しンぐ文章を少しンぐ文章を少しンぐ文章を少しンぐ</dd>
        </dl>
    </div>
    @endfor
@endsection