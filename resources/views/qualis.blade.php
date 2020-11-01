@extends('common.main')
@section('title', '資格一覧')
{{-- @section('stylesheet')
  <link rel="stylesheet" href="css/toiawase.css"/>
@endsection --}}

@section('main')
    <p>資格一覧です</p>
    <a href="{{ route('quali', ['id' => 1])}}">司法書士へ</a>
    <a href="{{ route('quali', ['id' => 2])}}">行政書士へ</a>
    <a href="{{ route('quali', ['id' => 3])}}">税理士へ</a>
@endsection