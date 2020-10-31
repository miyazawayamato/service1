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
        <div class="header-main">
            <div class="header-logo">
                <h1><a href="{{route('home')}}">ここはロゴ</a></h1>
            </div>
            <div class="header-nav">
                <nav>
                    <ul class="headnavi">
                        <li><a href="{{route('qualis')}}">資格一覧</a></li>
                        <li><a href="#">体験談</a></li>
                        <li><a href="{{route('board')}}">掲示板</a></li>
                        <li><a href="{{route('article')}}">コラム</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    
    <div class="main">
        <div class="left">
            @yield('main')
        </div>
        
        <div class="right">
            <p>右</p>
        </div>
    </div>
    
    <footer>
        
    </footer>
</body>
</html>