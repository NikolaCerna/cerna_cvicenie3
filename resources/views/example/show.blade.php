<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zobrazenie fibonacciho postupnosti</title>
</head>
<body>

<h1>Fibonacciho postupnosť:</h1>
<ul>
        @foreach ($a as $b)
            <li>{{ $b }}</li>
        @endforeach
</ul>
    <a href="/example/create">Späť na zadanie čísla</a>
</body>
</html>
