@extends('layout.common')
@include('layout.header')

@section('content')

    <body>
        <div class="container">
            <h1 class="text-center text-dark  border-bottom pb-5">マイページ</h1>
            <div class="pt-3 row">
                <div class="col-md-3 border mr-3">
                    <h3 class="text-center mb-3">{{ $user->name }}</h3>
                    <div class="d-flex justify-content-center">
                        <img src="/images/student avatar free icon.svg" class="d-flex align-items-center rounded-circle"
                            style="object-fit: cover; width: 150px; height: 150px;">
                    </div>

                    <ul>
                        <li>フォロー</li>
                        <li>フォロワー</li>
                    </ul>
                </div>
                <div class="col-md-9 border">
                    <h3>プラン一覧</h3>
                </div>
            </div>
        </div>
        {{-- <a href="{{ route('travel.edit', ['id' => $travel->id]) }}"><button class="btn btn-success">しおりを編集する</button></a> --}}
    </body>
@endsection

@include('layout.footer')
