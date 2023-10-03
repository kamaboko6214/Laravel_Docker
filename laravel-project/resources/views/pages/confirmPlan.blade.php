@extends('layout.common')
@include('layout.header')

@section('content')

    <body>
        <div class="container">
            <form action="/travel/create/" method="post">
                {{ csrf_field() }}
                <div>
                    <input type="hidden" value="{{ $inputs['title'] }}" name="title" >
                    <input type="hidden" value="{{ $inputs['sub_title'] }}" name="sub_title" >
                    <h1 class="text-center h1">内容確認</h1>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">タイトル</label>
                        <input type="text" class="form-control" id="formGroupExampleInput"
                            placeholder="Example input placeholder" value="{{ $inputs['title'] }}" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">サブタイトル</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2"
                            placeholder="Another input placeholder" value=" {{ $inputs['sub_title'] }}" name="sub_title" disabled>
                    </div>
                    <div>
                        @foreach ($inputs['overview_title'] as $parent_key => $parent_value)
                            @if (!empty($parent_value))
                                <label for="formGroupExampleInput2" class="form-label">概要</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2"
                                    placeholder="Another input placeholder" value=" {{ $parent_value }}" disabled>
                                @foreach ($inputs['overview_content'] as $child_key => $child_value)
                                    @if ($parent_key == $child_key)
                                        <textarea class="form-control" id="formGroupExampleInput2" rows="3" disabled>{{ $child_value }}</textarea>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                        @foreach ($inputs['plan_title'] as $parent_key => $parent_value)
                            @if (!empty($parent_value))
                                <label for="formGroupExampleInput2" class="form-label">プラン</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2"
                                    placeholder="Another input placeholder" value=" {{ $parent_value }}" disabled>
                                @foreach ($inputs['plan_content'] as $child_key => $child_value)
                                    @if ($parent_key == $child_key)
                                        <textarea class="form-control" id="formGroupExampleInput2" rows="3" disabled>{{ $child_value }}</textarea>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </div>
                </div>
                <button class="btn btn-primary">登録する</button>
                <button class="btn btn-success" name="edit">編集する</button>
            </form>
        </div>
    </body>
@endsection

@include('layout.footer')
