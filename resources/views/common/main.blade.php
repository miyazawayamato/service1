<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @yield('stylesheet')
    <script src="https://kit.fontawesome.com/0e958c0ed0.js" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>
<body>
    <header>
    <div class="transe"></div>
        <div class="header-main">
            <div class="header-top">
                <a href="{{route('home')}}" class="fon-top"><h1 class="header-logo">ドクシカ</h1></a>
                <span class="login fon-top">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="tetext-gray-700underline">マイページ</a>
                        @else
                            <a href="{{ route('login') }}">ログイン/</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">新規登録</a>
                            @endif
                        @endif
                    @endif
                </span>
            </div>
            <div class="header-nav">
                <nav>
                    <ul class="headnavi">
                        <li><a href="{{route('qualis')}}">資格一覧</a></li>
                        <li><a href="trial">体験談一覧</a></li>
                        <li><a href="trial">掲示板一覧</a></li>
                        <li><a href="{{route('postform')}}">投稿する</a></li>
                        <li><a href="{{route('article')}}">コラム</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <div class="transe"></div>
    <div class="main-back">
        <div class="main">
            <div class="left">
                @yield('main')
            </div>
            
            <div class="right">
                <div class="rank">
                    <h3>ランキング</h3>
                    <div class="ranking">
                        <ul>
                            <li>
                                <a href="">１、資格資格</a>
                            </li>
                            <li>
                                <a href="">２、資格資格</a>
                            </li>
                            <li>
                                <a href="">３、資格資格</a>
                            </li>
                            <li>
                                <a href="">４、資格資格</a>
                            </li>
                            <li>
                                <a href="">５、資格資格</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="ad">広告</a>
                <div class="right-menu">
                <h3>メニュー</h3>
                <ul>
                    <li>
                        <a href="{{route('qualis')}}">資格一覧</a>
                    </li>
                    <li>
                        <a href="trial">体験談一覧</a>
                    </li>
                    <li>
                        <a href="trial">掲示板一覧</a>
                    </li>
                    <li>
                        <a href="{{route('article')}}">コラム</a>
                    </li>
                    <li>
                        <a href="{{route('postform')}}">投稿する</a>
                    </li>
                </ul>
                </div>
                <a href="#" class="ad">広告</a>
            </div>
        </div>
    </div>
    
    <footer>
        <div class="transe"></div>
        <div class="foot">
            <h3 class="foot-logo">ドクシカ</h3>
            <a href="#" class="foot-form">お問い合わせフォーム</a>
        </div>
        <p class="copyright">Copyright(C) sample office. All Rights Reserved.</p>
    </footer>
</body>
</html>