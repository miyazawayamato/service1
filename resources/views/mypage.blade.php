@extends('common.main')
@section('title', 'ホーム')
@section('stylesheet')
<link rel="stylesheet" href="{{ asset('css/trial.css') }}"/>
@endsection
@section('main')
    <p>マイページは準備中です<br>今後の公開をお待ちください</p>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button>ログアウト</button>
        {{-- <x-jet-dropdown-link href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
            {{ __('Logout') }}
        </x-jet-dropdown-link> --}}
    </form>
@endsection