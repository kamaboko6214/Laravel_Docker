@extends('layout.common')
@include('layout.header')

@section('content')

    <body>
        <div class="container">
            <div>
                <h1 class="text-center h1">作成完了</h1>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">タイトル</label>
                    <input type="text" class="form-control" id="formGroupExampleInput"
                        placeholder="Example input placeholder" value="{{ $travel->title }}" disabled>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">サブタイトル</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2"
                        placeholder="Another input placeholder" value="{{ $travel->subtitle }}" name="subtitle" disabled>
                </div>
                <div>
                    @foreach ($travel->overviews as $parent_key => $parent_value)
                        @if (!empty($parent_value))
                            <label for="formGroupExampleInput2" class="form-label">概要</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2"
                                placeholder="Another input placeholder" value="{{ $parent_value->title }}" disabled>
                            @foreach ($travel->overviews as $child_key => $child_value)
                                @if ($parent_key == $child_key)
                                    <textarea class="form-control" id="formGroupExampleInput2" rows="3" disabled> {{ $child_value->content }}</textarea>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                    @foreach ($travel->plans as $parent_key => $parent_value)
                        @if (!empty($parent_value))
                            <label for="formGroupExampleInput2" class="form-label">プラン</label>
                            <input type="text" class="form-control" id="formGroupExampleInput2"
                                placeholder="Another input placeholder" value="{{ $parent_value->title }}" disabled>
                            @foreach ($travel->plans as $child_key => $child_value)
                                @if ($parent_key == $child_key)
                                    <textarea class="form-control" id="formGroupExampleInput2" rows="3" disabled>{{ $child_value->content }}</textarea>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </div>
            </div>
            <a href="{{ route('travel.edit', ['id' => $travel->id]) }}"><button class="btn btn-success">しおりを編集する</button></a>
        </div>
    </body>
@endsection

@include('layout.footer')
