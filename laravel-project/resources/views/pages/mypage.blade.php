@extends('layout.common')
@include('layout.header')

@section('content')

    <body>
        <div class="container h-100 w-100">
            <h1 class="text-center text-dark  border-bottom pb-5">マイページ</h1>
            <div class="pt-3 row">
                <div class="col-md-4 border mr-3 flexbox h-75 " data-spy="affix">
                    <h3 class="text-center mb-3 mt-5">{{ $user->name }}</h3>
                    <div class="d-flex justify-content-center">
                        <img src="/images/student avatar free icon.svg" class="d-flex align-items-center rounded-circle"
                            style="object-fit: cover; width: 150px; height: 150px;">
                    </div>

                    <ul>
                        <li>フォロー</li>
                        <li>フォロワー</li>
                    </ul>
                </div>
                <div class="overflow-scroll col-md-8 border table-responsive" >
                    <h3 class="mt-3">プラン一覧</h3>
                    <table class="table table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col" class="fixed01">No</th>
                                <th scope="col" class="fixed01">タイトル</th>
                                <th scope="col" class="fixed01">サブタイトル</th>
                                <th scope="col" class="fixed01">作成日時</th>
                                <th scope="col" class="fixed01"></th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($user->travels as $key => $travel)
                                <tr>
                                    <th scope="row">{{ $travel->id }}</th>
                                    <td>{{ $travel->title }}</td>
                                    <td>{{ $travel->subtitle }}</td>
                                    <td>{{ $travel->created_at }}</td>
                                    <td><button class="btn btn-dark">詳細</button></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- <a href="{{ route('travel.edit', ['id' => $travel->id]) }}"><button class="btn btn-success">しおりを編集する</button></a> --}}
    </body>
@endsection

@include('layout.footer')
