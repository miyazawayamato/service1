@extends('common.main')
@section('title', '受験レポート')
@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/experience/experience.css') }}"/>
@endsection

@section('main')
    <h3>経験レポート</h3>
    <div class="report">
        <div class="report-top">
            <p class="type">資格書士</p>
            <div class="time-like">
                <span class="time">更新日　{{$texts->created_at->format('Y/m/d')}}</span>
                {{-- <span class="like"><i class="fas fa-check"></i>役立ち23</span> --}}
                <div class="like">
                    @if($texts->is_liked_by_auth_user())
                      <a href="{{ route('reply.unlike', ['id' => $texts->id]) }}" class="like"><i class="fas fa-check"></i>役立ち<span>{{ $texts->likes->count() }}</span></a>
                    @else
                      <a href="{{ route('reply.like', ['id' => $texts->id]) }}" class="like"><i class="fas fa-check"></i>役立ち<span>{{ $texts->likes->count() }}</span></a>
                    @endif
                </div>
            </div>
        </div>
        <div class="contributor">
            <span class="naming">投稿者</span>
            <span class="name">{{$name}}</span>
        </div>
        <dl>
            <dt>勉強期間</dt>
            <dd>{{$texts->period}}</dd>
        </dl>
        <dl>
            <dt>いつ</dt>
            <dd>{{$texts->time}}</dd>
        </dl>
        <dl>
            <dt>何回目の試験で合格</dt>
            <dd>{{$texts->how}}</dd>
        </dl>
        <dl>
            <dt>受験の目的</dt>
            <dd>{{$texts->purpose}}</dd>
        </dl>
        <dl>
            <dt>当時の職業</dt>
            <dd>{{$texts->profession}}</dd>
        </dl>
        <dl>
            <dt>教材・スクール等</dt>
            <dd>{{$texts->material}}</dd>
        </dl>
        <div class="report-main">
            <h4>勉強手順・注意した点</h4>
            <p>{{$texts->body}}</p>
        </div>
    </div>
@endsection