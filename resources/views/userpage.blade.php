<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>User Data</h1>
    <ul>
        @foreach ($data as $item)
            <li><span>Name: <b>{{ $item['id'] }}</b></span></li>
            <li><span>Body: <b>{{ $item['body'] }}</b></span></li>
            <li><span>Title: <b>{{ $item['title'] }}</b></span></li>
        @endforeach
    </ul>
    
</body>
</html>