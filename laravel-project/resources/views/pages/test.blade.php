<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    testです。
    @foreach($travels as $travel)
        <p>{{ $travel->title}}</p>
        @foreach ( $travel->overviews as $overview )
            <p>{{ $overview->title }}</p>
        @endforeach
    @endforeach
</body>
</html>