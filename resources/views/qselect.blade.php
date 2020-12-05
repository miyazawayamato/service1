@extends('common.main')
@section('title', 'ドクシカ/資格選択')
@section('stylesheet')
  <link rel="stylesheet" href="{{ asset('css/qualis/qualis.css') }}"/>
@endsection

@section('main')
    <h3>資格を選択してください</h3>
    @foreach ($qualis as $quali)
        <a href="{{route('postform', ['id' => $quali->id])}}">{{$quali->certificate}}</a><br>
    @endforeach
@endsection