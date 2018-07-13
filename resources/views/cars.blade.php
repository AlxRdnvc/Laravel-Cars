<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cars</title>

    </head>
    <body>
        <ul>
            @foreach($cars as $car)
            <li>{{ $car->title }}</li>
            <li>{{ $car->producer }}</li>
            @endforeach
        </ul>
    </body>
</html>