<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach ($numeros as $num)
        @if ($num%2 == 0)
            <h2>{{$num}}</h2>
        @else 
            <h2 style=background-color:green;>{{$num}}</h2>
        @endif
    @endforeach
</body>
</html>