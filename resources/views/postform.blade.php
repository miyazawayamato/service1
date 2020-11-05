@extends('common.main')
@section('title', 'ホーム')
@section('stylesheet')
  <link rel="stylesheet" href="css/postform/postform.css"/>
@endsection
@section('main')
    <h2 class="postfrom-tittle">受験レポート投稿</h2>
    <div class="posting">
      <form action="{{route('postform')}}" method="post">
      @csrf
        <div class="box">
          <span>投稿者ネーム</span>
          <input name="name" class="box-selection">
        </div>
        <div class="box">
          <span>勉強期間</span>
          <input type="text" class="box-selection">
        </div>
        <div class="box">
          <span>受験した資格</span>
          <select name="qualiexp_id" class="box-selection">
            <option value="1">司法書士</option>
            <option value="2">行政書士</option>
            <option value="3">税理士</option>
          </select>
        </div>
        <div class="box">
          <span>何年度</span>
          <select name="" id="" class="box-selection">
            <option value="">2020</option>
            <option value="">2019</option>
            <option value="">2018</option>
          </select>
        </div>
        <div class="box">
          <span>受験回数</span>
          <select name="" id="" class="box-selection">
            <option value="">1</option>
            <option value="">2</option>
            <option value="">3</option>
          </select>
        </div>
        <div class="box">
          <span>当時の職業</span>
          <select name="" id="" class="box-selection">
            <option value="">書士</option>
            <option value="">ショシ</option>
            <option value="">しょし</option>
          </select>
        </div>
        <div class="box">
          <p>受験の目的</p>
          <textarea name="" class="box-selection"></textarea>
        </div>
        <div class="box">
          <p>教材・スクール等</p>
          <textarea name="" class="box-selection"></textarea>
        </div>
        <div class="box">
          <p>勉強手順・注意した点</p>
          <textarea name="body" maxlength="文字数" class="box-selection"></textarea>
        </div>
        <div class="post-btn">
            <button type="submit">投稿</button>
        </div>
      </form>
    </div>
@endsection