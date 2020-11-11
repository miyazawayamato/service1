@extends('common.main')
@section('title', 'ホーム')
@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/home.css') }}"/>
@endsection
@section('main')
    <div class="home">
        <p class="introduction">資格取得のための合格者の体験談や掲示板サイトです<br>試運転中＆公開直後</p>
        <h2>資格情報</h2>
        <div class="home-main">
            <ul class="boxs">
            <!-- foreach処理を入れる -->
                @for($i = 1; $i < 13; $i++ )
                <li class="home-box">
                    <div class="box">
                        <a href="#">
                            <h3>資格資格</h3>
                            <dl>
                                <dt>受験日</dt>
                                <dd>10月中旬ごろ</dd>
                            </dl>
                            <dl>
                                <dt>合格率</dt>
                                <dd>10%前後(約2000人)</dd>
                            </dl>
                            <dl>
                                <dt>資格区分</dt>
                                <dd>民間</dd>
                            </dl>
                        </a>
                    </div>
                </li>
                @endfor
            </ul>
        </div>
    </div>
@endsection