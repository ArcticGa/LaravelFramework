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
            font-family: Arial, sans-serif;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            font-size: 25px;
        }
        p {
            font-size: 30px;
        }
        h2 {
            font-size: 40px;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <p>Моя любимая строчка из книги:</p>
    <h2>{{$favorite}}</h2>
</body>
</html>
