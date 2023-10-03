@extends('layout.common')
@include('layout.header')

@section('content')

    <body>
        <div class="plan_container">
            <form action="/travel/create/confirm" method="post">
                {{ csrf_field() }}
                <div class="workapce">
                    <div class="plan_message">
                        <h3>旅行のプランを作成</h3>
                        <p>旅行のしおりを作成しましょう<br>
                            持ち物、スケジュールなどを決定し、仲間とシェアしましょう</p>
                    </div>
                    <div class="plan_card" name="card_content_plan">
                        <div class="card" id="card">
                            <div class="card-header">
                                <input class="view_head form-control" name="title" id="" cols="30" value= {{ old('title') }}
                                    rows="5" placeholder="しおりのタイトル">
                                <input class="view_sub form-control" name="sub_title" id="" cols="30" value= {{ old('sub_title') }}
                                    rows="5" placeholder="サブタイトル">

                            </div>
                            <a href="#overview"><button type="button" class="btn btn-success">プラン作成に進む</button></a>
                        </div>
                    </div>
                </div>
                <div class="overview" id="overview">
                    @if ($errors->any())
                        <div>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <h1>概要</h1>
                    <div id="card_content" name="card_content">
                        <div class="card" id="card">
                            <div class="card-header">
                                <input class="view_title form-control" type="text" size="30" id="view_title"
                                    name='overview_title[]' placeholder="タイトル（メンバー、持ち物等）">
                            </div>
                            <div class="card-body">
                                <textarea class="view_body form-control" id="view_body" cols="30" rows="3" name='overview_content[]'
                                    placeholder="内容(免許、水着等)"></textarea>
                            </div>
                            <img class="remove" src="/images/delete-bin-fill.svg" alt="" onClick="remove_card()">
                        </div>
                        <button class="add btn btn-primary rounded-pill btn-lg mt-2" onClick="add_card()" type="button"
                            id="add_button">➕追加</button>
                    </div>
                </div>
                <div class="overview-s" id="overview_s">
                    <h1>スケジュール</h1>
                    <div id="card_content_s" name="card_content">
                        <div class="card" id="card">
                            <div class="card-body">
                                <input class="view_title form-control" type="date" size="30" id="view_title_date"
                                    name='date[]' value="">
                                <input class="view_title form-control" type="time" size="30" id="view_title_time"
                                    name='time[]' value="10:00">
                            </div>
                            <div class="card-body">
                                <input class="view_title form-control" type="text" size="30" id="view_title_s"
                                    name='plan_title[]' value="" placeholder="タイトル（集合　お昼ご飯）">
                            </div>
                            <div class="card-body">
                                <textarea class="view_body form-control" id="view_body_s" cols="30" rows="3" placeholder="◯◯駅集合！　◯◯でランチ！"
                                    name='plan_content[]'></textarea>
                            </div>
                            <img class="remove" src="/images/delete-bin-fill.svg" alt="" onClick="remove_card()">
                        </div>
                        <button class="add btn btn-primary rounded-pill btn-lg mt-2" onClick="add_schedule()" type="button"
                            id="add_button">➕追加</button>
                    </div>
                </div>
                <button class="btn btn-primary">入力内容を確認する</button>
            </form>
        </div>
    </body>
@endsection

@include('layout.footer')
