@extends('common.main')
@section('title', 'ドクシカ/受験レポート一覧/'.$quali->certificate)
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
    <div class="link">
        {{ $exps->links('vendor.pagination.semantic-ui') }}
    </div>
    @php 
        $counter = 1;
    @endphp
    @foreach ($exps as $exp)
    <div class="exp-box">
        <p>@php echo $counter++; @endphp</p>
        {{-- 個別に --}}
        <p><a href="{{route('experience', ['id' => $id, 'qualiexp_id' => $exp->id])}}">体験談へ</a></p>
        <dl>
            {{-- 取得体験談->モデルのメソッド->カラム名 --}}
            <dt>{{$exp->user->name}}</dt>
            <dd>{{$exp->created_at->format('Y/m/d')}}</dd>
            <dd><i class="fas fa-check"></i>役立ち<span>{{ $exp->likes->count() }}</span></dd>
            <dd>{{$exp->body}}</dd>
        </dl>
    </div>
    @endforeach
    <div class="link">
        {{ $exps->links('vendor.pagination.semantic-ui') }}
    </div>
@endsection