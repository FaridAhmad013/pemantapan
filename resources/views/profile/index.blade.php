<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    @for ($i = 0; $i < 10; $i++)
        @if ($i % 2 == 0)
            Value {{ $i }} Genap <br>
        @else
            Value {{ $i }} Ganjil <br>
        @endif
    @endfor

    

</body>

</html>
