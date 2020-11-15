@extends('common.main')
@section('title', 'ホーム')
@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/trial.css') }}"/>
@endsection
@section('main')
    <p style="color: #CAE65C">{{$user->name}}</p>
    <p>マイページはコンテンツをさらに追加予定です<br>今後の公開をお待ちください</p>
    {{-- <p>{{$user->body}}</p> --}}
    <table>
        <tr>
            <th>資格名</th>
            <th>最終更新日</th>
            <th>編集</th>
        </tr>
        @foreach($posts as $post)
            <tr>
                <td>{{$post->qualification->certificate}}</td>
                <td>{{$post->updated_at->format('Y/m/d')}}</td>
                <td><a href="#">編集</a></td>
            </tr>
        @endforeach
    </table>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button>ログアウト</button>
    </form>
    {{-- 認証しているかをはじく --}}
    {{-- <a href="{{route('edit')}}">体験談投稿履歴・編集ページへ移動</a> --}}
@endsection