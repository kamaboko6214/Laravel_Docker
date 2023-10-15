<!DOCTYPE HTML>
    <html lang="ja">
    <head>
    <!-- CSS only -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')旅の手帳</title>
    <meta name="description" itemprop="description" content="@yield('description')">
    <meta name="keywords" itemprop="keywords" content="@yield('keywords')">
    <link href="https://fonts.googleapis.com/earlyaccess/hannari.css" rel="stylesheet">
    @vite(['resources/scss/app.scss', 'resources/scss/createPlan.scss', 'resources/scss/complete.scss','resources/scss/layout.scss', 'resources/js/index.js', 'resources/sass/app.scss', 'resources/js/app.js'])
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