@extends('layout.common')
@include('layout.header')

@section('content')

    <body>
        <div class="all-item">
            <div class="img">
                <div class="title-body" style="height:400px;">
                    <div class="title-text">
                        <h1 class="logo text-center">旅の手帳</h1>
                        <p>予定を簡単に作成し、共有できるサービスです。</p>
                        <div class="text-center mt-5">
                            <div class="button013">
                                @guest
                                    <a href="/register">しおりを作成する→</a>
                                @else
                                    <a href="/create">しおりを作成する→</a>
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main">
                <div class="main-container">
                    <h1>一から書く必要なし！<br>
                        簡単に作成できます。</h1>
                    <div class="flex-container">
                        <div class="flex-item">
                            <h3>テストです。</h3>
                            <p>TufGugQiyebikVKzMJhtUzIvZrWPWXjtMBeWxuWjOGbpAqIPHQSmFkEmAJpJWpUgloVMyiTcgVCsOhMFRWozmEoDDnVUPPjItGLY
                            </p>
                        </div>

                        <div class="flex-item">
                            <div class="test_img"></div>
                        </div>
                    </div>
                    <div class="flex-container">
                        <div class="flex-item">
                            <div class="test_img"></div>
                        </div>
                        <div class="flex-item">
                            <h3>テストです。</h3>
                            <p>TufGugQiyebikVKzMJhtUzIvZrWPWXjtMBeWxuWjOGbpAqIPHQSmFkEmAJpJWpUgloVMyiTcgVCsOhMFRWozmEoDDnVUPPjItGLY
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection

@include('layout.footer')
