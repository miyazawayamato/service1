@extends('common.main')
@section('title', '体験談一覧')
@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/experiences/experiences.css') }}"/>
@endsection
@section('main')
    <div class="main-menu">
        <a href="#">体験談一覧</a>
        <a href="{{route('board', [$id])}}">掲示板</a>
    </div>
    <h2>体験談一覧</h2>
    @foreach ($exps as $exp)
    <p>{{$exp->qualiexp_id}}</p>
    <div class="exp-box">
        <p><a href="{{route('experience', ['id' => $id, 'qualiexp_id' =>$exp->qualiexp_id])}}">体験談へ</a></p>
        <dl>
            <dt>{{$exp->name}}</dt>
            <dd>{{$exp->created_at}}</dd>
            <dd>{{$exp->body}}</dd>
        </dl>
    </div>
    @endforeach
@endsection