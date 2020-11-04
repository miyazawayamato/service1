@extends('common.main')
@section('title', '資格一覧')
@section('stylesheet')
  <link rel="stylesheet" href="{{ asset('css/quali/quali.css') }}"/>
@endsection

@section('main')
    <div class="quali-top">
        <h2 class="shikaku">{{ $quali->certificate }}</h2>
        <table>
            <tr>
                <th>受験日</th>
                <th>合格率</th>
                <th>資格区分</th>
            </tr>
            <tr>
                <td>10月中旬ごろ</td>
                <td>10%前後(約2000人)</td>
                <td>民間</td>
            </tr>
        </table>
    </div>
    <p class="explanation">ここに軽い説明文が入りますここに軽い説明文が入りますここに軽い説明文が入りますここに軽い説明文が入りますここに軽い説明文が入りますここに軽い説明文が入りますここに軽い説明文が入りますここに軽い説明文が入ります</p>
    <p><a href="{{route('postform')}}">投稿する</a></p>
    <p><a href="{{route('board', [$id])}}">掲示板へ</a></p>
    <p><a href="{{route('experiences', [$id])}}">体験談一覧へ</a></p>
@endsection