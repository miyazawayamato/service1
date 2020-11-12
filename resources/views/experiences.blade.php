@extends('common.main')
@section('title', '体験談一覧')
@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/experiences/experiences.css') }}"/>
<link rel="stylesheet" href="{{ asset('css/quali/quali.css') }}"/>
@endsection
@section('main')
    <div class="quali-top">
        <h2 class="shikaku">{{$quali->certificate}}</h2>
        <table>
            <tr>
                <th>受験日</th>
                <th>合格率</th>
                <th>資格区分</th>
            </tr>
            <tr>
                <td>{{$quali->time}}</td>
                <td>{{$quali->passrate}}</td>
                <td>{{$quali->class}}</td>
            </tr>
        </table>
    </div>
    <div class="accordion">
        <input id="acd-check1" class="acd-check" type="checkbox">
        <label class="acd-label" for="acd-check1">詳しい情報</label>
        <div class="acd-content">
            <p>今後の情報追加をお待ちください。</p>
        </div>
    </div>
    <div class="switch-menu">
        <a href="#" >体験談一覧</a>
        <a class="switch" href="{{route('board', [$id])}}">掲示板</a>
    </div>
    @foreach ($exps as $exp)
    <p>{{$exp->qualiexp_id}}</p>
    <div class="exp-box">
        <p><a href="{{route('experience', ['id' => $id, 'qualiexp_id' =>$exp->qualiexp_id])}}">体験談へ</a></p>
        <dl>
            {{-- ユーザーネームを記入したい --}}
            {{-- <dt>{{$name}}</dt> --}}
            <dd>{{$exp->created_at->format('Y/m/d')}}</dd>
            <dd>{{$exp->body}}</dd>
        </dl>
    </div>
    @endforeach
@endsection