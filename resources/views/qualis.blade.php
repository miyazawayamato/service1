@extends('common.main')
@section('title', '資格一覧')
{{-- @section('stylesheet')
  <link rel="stylesheet" href="css/toiawase.css"/>
@endsection --}}

@section('main')
    <p>資格一覧です</p>
    <a href="{{route('quali')}}">個別資格へ</a>
@endsection