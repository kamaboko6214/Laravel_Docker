@section('header')
    <header class="header fixed-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="opacity:0.9">
            <div class="container-fluid mx-3">
                <a class="navbar-brand fs-2 fw-bold" href="/">旅の手帳</a>
                <div class="d-flex">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 font-family">
                            <li class="nav-item mx-3">
                                <a class="nav-link fs-5" aria-current="page" href="/">ホーム</a>
                            </li>
                            <li class="nav-item">
                                @guest
                                    <a class="nav-link fs-5 mx-3" href="/register">予定を作成する</a>
                                @else
                                    <a class="nav-link fs-5 mx-3" href="/create">予定を作成する</a>
                                @endguest
                            </li>
                            <li class="nav-item dropdown">
                                <div class="collapse navbar-collapse fs-5 mx-3" id="navbarSupportedContent">
                                    <!-- Left Side Of Navbar -->
                                    <ul class="navbar-nav me-auto">

                                    </ul>

                                    <!-- Right Side Of Navbar -->
                                    <ul class="navbar-nav ms-auto">
                                        <!-- Authentication Links -->
                                        @guest
                                            @if (Route::has('login'))
                                                <li class="nav-item">
                                                    <a class="nav-link fs-5 mx-3" href="{{ route('login') }}">ログイン</a>
                                                </li>
                                            @endif

                                            @if (Route::has('register'))
                                                <li class="nav-item">
                                                    <a class="nav-link fs-5 mx-3" href="{{ route('register') }}">新規登録</a>
                                                </li>
                                            @endif
                                        @else
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="dropdown-toggle nav-link " href="#"
                                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }}
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();  
                                                                     document.getElementById('logout-form').submit()">
                                                        {{ __('Logout') }}
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                        class="d-none">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li>
                                        @endguest
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
@endsection
