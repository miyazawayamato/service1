@extends('common.main')
@section('title', '体験談一覧')
@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/lists/list.css') }}"/>
@endsection

@section('main')
    <h2>体験談一覧</h2>
    <div class="reports">
        <div class="boxs">
            @for($i = 1; $i < 10; $i++)
            <dl class="box">
                <dt>資格資格</dt>
                <dd>（23）</dd>
            </dl>
            <dl class="box">
                <dt>資格資格</dt>
                <dd>（23）</dd>
            </dl>
            @endfor
        </div>
    </div>
@endsection