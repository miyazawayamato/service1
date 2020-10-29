<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @yield('stylesheet')
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <div class="header-main">
            <div class="header-logo">
                <h1>これはロゴ</h1>
            </div>
            <div class="header-nav">
                <nav>
                    <ul class="headnavi">
                        <li><a href="#">資格一覧</a></li>
                        <li><a href="#">体験談</a></li>
                        <li><a href="{{route('board')}}">掲示板</a></li>
                        <li><a href="{{route('article')}}">コラム</a></li>
                        <li><a href="#">お問い合わせ</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    
    @yield('main')
    
    <footer>
        
    </footer>
</body>
</html>