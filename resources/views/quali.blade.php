@extends('common.main')
@section('title', '資格一覧')
@section('stylesheet')
  <link rel="stylesheet" href="{{ asset('css/quali/quali.css') }}"/>
@endsection

@section('main')
    <div class="quali-top">
        <!-- <h2 class="shikaku">{{ $quali->certificate }}</h2> -->
        <h2 class="shikaku">こんにちはこんに</h2>
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
    <div class="accordion">
        <input id="acd-check1" class="acd-check" type="checkbox">
        <label class="acd-label" for="acd-check1">詳しい情報</label>
        <div class="acd-content">
            <p>ここに軽い説明文が入りますここに軽い説明文が入りますここに軽い説明文が入りますここに軽い説明文が入りますここに軽い説明文が入りますここに軽い説明文が入りますここに軽い説明文が入りますここに軽い説明文が入ります</p>
        </div>
    </div>
    <div class="maining">
        <p><a href="{{route('postform')}}">投稿する</a></p>
        <p><a href="{{route('board', [$id])}}">掲示板へ</a></p>
        <p><a href="{{route('experiences', [$id])}}">体験談一覧へ</a></p>
    </div>
@endsection