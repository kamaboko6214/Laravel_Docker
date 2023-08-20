@extends('layout.common')
@include('layout.header')
@section('content')

    <body>
        <div class="container">
            <div class="workapce">
                <div class="work_main">
                    <h3>ワークスペース</h3>
                    <div class="input-group input-group-lg">
                        <input placeholder="例）　2泊3日 沖縄旅行！" type="text" class="form-control" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-lg">
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection

@include('layout.footer')
