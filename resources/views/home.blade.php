@extends('common.main')
@section('title', 'ドクシカ/資格取得のための合格者の体験談や掲示板サイト')
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
                @foreach($qualis as $quali)
                <li class="home-box">
                    <div class="box">
                        <a href="{{route('experiences', ['id' => $quali->id])}}">
                            <h3>{{$quali->certificate}}</h3>
                            <dl>
                                <dt>受験日</dt>
                                <dd>{{$quali->time}}</dd>
                            </dl>
                            <dl>
                                <dt>合格率</dt>
                                <dd>{{$quali->passrate}}</dd>
                            </dl>
                            <dl>
                                <dt>資格区分</dt>
                                <dd>{{$quali->class}}</dd>
                            </dl>
                        </a>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection