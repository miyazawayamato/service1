@extends('common.main')
@section('title', 'ドクシカ/マイページ')
@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/mypage/mypage.css') }}"/>
@endsection
@section('main')
    <h5 class="pagetop">マイページ</h5>
    <div class="name">
        <p class="user1">ユーザー</p>
        <form method="POST" action="{{ route('edit.name')}}">
            @csrf
            <input type="text" value="{{$user->name}}" name="name" id="nametext">
            <button id="button" >ネーム変更</button>
        </form>
    </div>
    @error('name')
        <div>{{ $message }}</div>
    @enderror
    <h5 class="pagetop">投稿した資格</h5>
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
                <td class="rbring">{{$post->updated_at->format('Y/m/d')}}</td>
                {{-- ルートに出る --}}
                {{-- <td class="rbring"><a href="{{ route('edit', ['id' => $post->id]) }}">編集</a></td> --}}
                <td>
                    <form action="{{ route('edit')}}" method="POST" class="cbring">
                        @csrf
                        <input type="hidden" value="{{$post->id}}" name="id" >
                        <button>編集</button>
                    </form>
                </td>
                <td>
                    <form method="POST" action="{{ route('edit.delete')}}" class="cbring">
                        @csrf
                        {{-- valueがわかる --}}
                        <input type="hidden" value="{{$post->id}}" name="id">
                        <button onclick="return confirm('本当に削除しますか？')">削除</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <form method="POST" action="{{ route('logout') }}" class="logout">
        @csrf
        <button>ログアウト</button>
    </form>
@endsection