@extends('common.main')
@section('title', 'ホーム')
@section('stylesheet')
  <link rel="stylesheet" href="css/postform/postform.css"/>
@endsection
@section('main')
    <p>投稿します</p>
    <div class="posting">
      <form action="{{route('postform')}}" method="post">
      @csrf
        <div class="box">
          <p>投稿者ネーム</p>
          <input name="name">
        </div>
        <div class="box">
          <p>受験した資格</p>
          <select name="qualiexp_id">
            <option value="1">司法書士</option>
            <option value="2">行政書士</option>
            <option value="3">税理士</option>
          </select>
        </div>
        <div class="box">
          <p>勉強期間</p>
          <input type="text">
        </div>
        <div class="box">
          <p>何年度</p>
          <select name="" id="">
            <option value="">2020</option>
            <option value="">2019</option>
            <option value="">2018</option>
          </select>
        </div>
        <div class="box">
          <p>受験回数</p>
          <select name="" id="">
            <option value="">1</option>
            <option value="">2</option>
            <option value="">3</option>
          </select>
        </div>
        <div class="box">
          <p>受験の目的</p>
          <textarea name=""></textarea>
        </div>
        <div class="box">
          <p>教材・スクール等</p>
        </div>
        <div class="box">
          <p>当時の職業</p>
          <select name="" id="">
            <option value="">書士</option>
            <option value="">ショシ</option>
            <option value="">しょし</option>
          </select>
        </div>
        <div class="box">
          <p>勉強手順・注意した点</p>
          <textarea name="body" id="" cols="30" rows="10"></textarea>
        </div>
        <button type="submit">投稿</button>
      </form>
    </div>
@endsection