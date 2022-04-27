<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            background: #eee;
            font-family: Arial, sans-serif;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            height: 100vh;
        }
        h4 {
            margin: 5px 0;
        }
        .block {
            border-radius: 10px;
            padding: 10px 20px;
            box-shadow: 0px 0px 25px 0px rgba(34, 60, 80, 0.2);
            min-height: 110px;
            display: flex;
            flex-direction: column;

            justify-content: center;
        }

    </style>
</head>
<body>
    <div class="block">
        <h4>Список пользователей: </h4>
        @foreach ($users as $user)
            <li>Пользователь: {{ $user }}</li>
        @endforeach
    </div>
    <div class="block">
        <h4>Эти предметы есть у каждого</h4>
        @foreach ($items as $item)
            <div>{{ $item }}</div>
        @endforeach
    </div>
    <div class="block">
        <h4>Только четные числа</h4>
        @foreach ($seasons as $season)
            @if( $season % 2 == 0)
                <span>{{$season}}</span>
            @endif
        @endforeach
    </div>
</body>
</html>
