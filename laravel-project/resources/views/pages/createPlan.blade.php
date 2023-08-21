@extends('layout.common')
@include('layout.header')
@section('content')

    <body>
        <div class="plan_container">
            <div class="workapce">
                <h3>ワークスペース</h3>
                <input placeholder="例）　2泊3日 沖縄旅行！" type="text" class="form-control form-control-lg"
                    aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
            </div>
            <div class="overview">
                <h1>概要</h1>
                <div class="card" id="card">
                    <div class="card-header">
                        <input class="view_title form-control" type="text" size="30" placeholder="タイトル（メンバー、持ち物等）">
                    </div>
                    <div class="card-body">
                        <textarea class="view_body form-control" name="view_body" id="" cols="30" rows="5" placeholder="内容(免許、水着等)"></textarea>
                    </div>
                </div>
                <button class="btn btn-primary rounded-pill btn-lg mt-2" onClick="add_card()">➕追加</button>
            </div>
        </div>
    </body>
@endsection

@include('layout.footer')
