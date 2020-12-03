@extends('common.main')
@section('title', 'ドクシカ/マイページ')
@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/trial.css') }}"/>
@endsection
@section('main')
    @if(is_null($user->email_verified_at))
        <p>メール認証をしてください</p>
    @else
        <p style="color: #CAE65C">{{$user->name}}</p>
        <table>
            <tr>
                <th>資格名</th>
                <th>最終更新日</th>
                <th>編集</th>
                <th>削除</th>
            </tr>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->qualification->certificate}}</td>
                    <td>{{$post->updated_at->format('Y/m/d')}}</td>
                    <td><a href="{{ route('edit', ['id' => $post->id]) }}">編集</a></td>
                    <td><a href="{{ route('edit.delete', ['id' => $post->id]) }}">削除</a></td>
                </tr>
            @endforeach
        </table>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button>ログアウト</button>
        </form>
    @endif
@endsection