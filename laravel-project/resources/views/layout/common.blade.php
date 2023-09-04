<!DOCTYPE HTML>
    <html lang="ja">
    <head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name=”viewport” content=”width=device-width, initial-scale=1”>
    <title>@yield('title')旅の手帳</title>
    <meta name="description" itemprop="description" content="@yield('description')">
    <meta name="keywords" itemprop="keywords" content="@yield('keywords')">
    <link href="https://fonts.googleapis.com/earlyaccess/hannari.css" rel="stylesheet">
    @vite(['resources/scss/app.scss', 'resources/js/app.js', 'resources/scss/layout.scss', 'resources/js/index.js'])
    @yield('pageCss')
    </head>
    <body>
     
    @yield('header')
     
    <div class="contents">
        <!-- コンテンツ -->
        <div class="main">
            @yield('content')
        </div>
     
        <!-- 共通メニュー -->
        <div class="sub">
            @yield('submenu')
        </div>
    </div>
     
    @yield('footer')
    </body>
    </html>