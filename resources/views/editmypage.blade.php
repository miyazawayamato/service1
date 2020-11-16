@extends('common.main')
@section('title', '編集')
@section('stylesheet')
    <link rel="stylesheet" href="{{ asset('css/postform/postform.css') }}"/>
@endsection

@section('main')
    <h2 class="postfrom-tittle">受験レポート投稿</h2>
    <div class="posting">
    <form action="{{route('edit.update',['id' => $exp->id])}}" method="post">
        @csrf
    {{-- <input type="hidden" value="{{$user->id}}" name="user_id"> --}}
        <div class="box">
        <span>投稿者ネーム</span>
        <input type="text" value="{{$exp->user->name}}" disabled>
        </div>
        <div class="box">
        <span>受験した資格</span>
        <select name="qualification_id" class="box-selection" value="{{$exp->qualification_id}}">
        {{-- <select name="qualification_id" class="box-selection" value="{{ old('qualification_id') }}"> --}}
            <option value="{{$exp->qualification_id}}">{{$exp->qualification->certificate}}</option>
            <option value="1">司法書士</option>
            <option value="2">行政書士</option>
            <option value="3">税理士</option>
        </select>
        @if ($errors->has('qualification_id'))
            <p style="color: red">{{$errors->first('qualification_id')}}</p>
        @endif
        </div>
        <div class="box">
        <span>勉強期間</span>
        {{-- <select name="period" class="box-selection" value="{{ old('period') }}"> --}}
        <select name="period" class="box-selection" value="">
            <option >{{$exp->period}}</option>
            <option>1年未満</option>
            <option>１～2年</option>
            <option>3年</option>
        </select>
        @if ($errors->has('period'))
            <p style="color: red">{{$errors->first('period')}}</p>
        @endif
        </div>
        <div class="box">
        <span>何年度</span>
        {{-- <select name="time" class="box-selection"  value="{{ old('time') }}"> --}}
        <select name="time" class="box-selection"  value="">
            <option>{{$exp->time}}</option>
            <option>2020</option>
            <option>2019</option>
            <option>2018</option>
        </select>
        @if ($errors->has('time'))
            <p style="color: red">{{$errors->first('time')}}</p>
        @endif
        </div>
        <div class="box">
        <span>受験回数</span>
        <select name="how" class="box-selection"  value="">
        {{-- <select name="how" class="box-selection"  value="{{ old('how') }}"> --}}
            <option>{{$exp->how}}</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
        </select>
        @if ($errors->has('how'))
            <p style="color: red">{{$errors->first('how')}}</p>
        @endif
        </div>
        <div class="box">
        <span>当時の職業</span>
        <select name="profession" class="box-selection" value="">
        {{-- <select name="profession" class="box-selection" value="{{ old('profession') }}"> --}}
            <option>{{$exp->profession}}</option>
            <option>資格に</option>
            <option>ショシ</option>
            <option>しょし</option>
        </select>
        @if ($errors->has('profession'))
            <p style="color: red">{{$errors->first('profession')}}</p>
        @endif
        </div>
        <div class="box">
        <p>受験の目的</p>
        <textarea name="purpose" class="box-selection">{{$exp->purpose}}</textarea>
        {{-- <textarea name="purpose" class="box-selection">{{ old('purpose') }}</textarea> --}}
        @if ($errors->has('purpose'))
            <p style="color: red">{{$errors->first('purpose')}}</p>
        @endif
        </div>
        <div class="box">
        <p>教材・スクール等</p>
        {{-- <textarea name="material" class="box-selection" onkeyup="Length(value);">{{ old('material') }}</textarea> --}}
        <textarea name="material" class="box-selection" onkeyup="Length(value);">{{$exp->material}}</textarea>
        <p id="counter">0文字</p>
        @if ($errors->has('material'))
            <p style="color: red">{{$errors->first('material')}}</p>
        @endif
        </div>
        <div class="box">
        <p>勉強手順・注意した点</p>
        {{-- <textarea name="body" maxlength="文字数" class="box-selection" onkeyup="ShowLength(value);">{{ old('body') }}</textarea> --}}
        <textarea name="body" maxlength="文字数" class="box-selection" onkeyup="ShowLength(value);">{{$exp->body}}</textarea>
        <p id="inputlength">0文字</p>
        @if ($errors->has('body'))
            <p style="color: red">{{$errors->first('body')}}</p>
        @endif
        </div>
        <div class="post-btn">
            <button type="submit">投稿</button>
        </div>
    </form>
    </div>
    <script src="{{ asset('js/postcount.js') }}"></script>
@endsection