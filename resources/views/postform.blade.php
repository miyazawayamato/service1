@extends('common.main')
@section('title', 'ホーム')
@section('stylesheet')
  <link rel="stylesheet" href="{{ asset('css/postform/postform.css') }}"/>
@endsection
@section('main')
  @auth
    <h2 class="postfrom-tittle">受験レポート投稿</h2>
    <div class="posting">
      <form action="{{route('postform')}}" method="post">
      @csrf
      <input type="hidden" value="{{$user->id}}" name="user_id">
      
        <div class="box">
          <span>投稿者ネーム</span>
          <input type="text" value="{{$user->name}}" disabled>
        </div>
        
        <div class="box">
          <span>受験した資格</span>
          <select name="qualification_id" class="box-selection" value="{{ old('qualification_id') }}">
            <option value=""></option>
            @foreach($qualis as $quali)
             <option value="{{$quali->id}}">{{$quali->certificate}}</option>
            @endforeach
          </select>
          @if ($errors->has('qualification_id'))
            <p style="color: red">{{$errors->first('qualification_id')}}</p>
          @endif
        </div>
        <div class="box">
          <span>勉強期間</span>
          <select name="period" class="box-selection" value="{{ old('period') }}">
            <option value=""></option>
            <option>3ヶ月未満</option>
            <option>3ヶ月～半年</option>
            <option>半年～1年</option>
            <option>1年～2年</option>
            <option>2年～5年</option>
            <option>5年以上</option>
          </select>
          @if ($errors->has('period'))
            <p style="color: red">{{$errors->first('period')}}</p>
          @endif
        </div>
        
        <div class="box">
          <span>何年に受けたか</span>
          <select name="time" class="box-selection"  value="{{ old('time') }}">
            <option></option>
            @for($i = 2020; $i >= 2000; $i--)
              <option>{{$i}}年</option>
            @endfor
            <option>1999以前</option>
          </select>
          @if ($errors->has('time'))
            <p style="color: red">{{$errors->first('time')}}</p>
          @endif
        </div>
        
        <div class="box">
          <span>受験回数</span>
          <select name="how" class="box-selection"  value="{{ old('how') }}">
            <option></option>
            @for($i = 1; $i <= 5; $i++)
              <option>{{$i}}回</option>
            @endfor
            <option>6回以上</option>
          </select>
          @if ($errors->has('how'))
            <p style="color: red">{{$errors->first('how')}}</p>
          @endif
        </div>
        
        <div class="box">
          <span>当時の職業</span>
          <select name="profession" class="box-selection" value="{{ old('profession') }}">
            <option></option>
            <option>資格に関係のある仕事</option>
            <option>資格に関係のない仕事</option>
            <option>資格に少し関りのある仕事</option>
            <option>学生</option>
            <option>働いていなかった</option>
            <option>無回答/どれにも当てはまらない</option>
          </select>
          @if ($errors->has('profession'))
            <p style="color: red">{{$errors->first('profession')}}</p>
          @endif
        </div>
        
        <div class="box">
          <p>受験の目的</p>
          <textarea name="purpose" class="box-selection btn purpose" placeholder="70字以内">{{ old('purpose') }}</textarea>
          @if ($errors->has('purpose'))
            <p style="color: red">{{$errors->first('purpose')}}</p>
          @endif
        </div>
        
        <div class="box">
          <p>教材・スクール等</p>
          <textarea name="material" class="box-selection btn material" onkeyup="Length(value);" placeholder="500字以内">{{ old('material') }}</textarea>
          <p id="counter">0文字</p>
          @if ($errors->has('material'))
            <p style="color: red">{{$errors->first('material')}}</p>
          @endif
        </div>
        
        <div class="box">
          <p>勉強手順・注意した点</p>
          <textarea name="body" maxlength="文字数" class="box-selection btn body" onkeyup="ShowLength(value);" placeholder="1500字以内">{{ old('body') }}</textarea>
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
  @endauth
  
  
  @guest
  <h2>ログインか新規会員登録を行ってください</h2>
  <a href="{{ route('login') }}">ログイン/</a>
  @if (Route::has('register'))
      <a href="{{ route('register') }}">新規登録</a>
  @endif
  @endguest
  
@endsection