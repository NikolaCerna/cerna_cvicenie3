
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zadanie čísla</title>
</head>
<body>

<form method="POST" action="/example/result">
    @csrf

    <p>
        <label>Number:</label><br>
        <input type="number" name="number">
    </p>
    <button type="submit">Fibonacci postupnosť</button>
</form>

</body>
</html>
