@section('header')
    <header class="header fixed-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="opacity:0.9">
            <div class="container-fluid mx-3">
                <a class="navbar-brand fs-2 fw-bold" href="/">旅の手帳</a>
                <div class="d-flex">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 font-family">
                            <li class="nav-item mx-3">
                                <a class="nav-link fs-5" aria-current="page" href="/">ホーム</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fs-5 mx-3" href="/create">予定を作成する</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle fs-5 mx-3" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    ログイン
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
@endsection
