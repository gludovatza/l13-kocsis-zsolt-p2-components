<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
</head>
<body>

    <h1>{{ $title }}</h1>

    <p id="message">{{ $message }}</p>

    <div class="alert alert-success">
        <strong>Siker!</strong> A művelet sikeresen lefutott.
    </div>

    <h2>Felhasználók</h2>

    <ul>
        @foreach ($users as $user)
            <li>{{ $user }}</li>
        @endforeach
    </ul>

    <h2>HTML teszt</h2>

    <div>
        <span class="important">Fontos szöveg</span>
    </div>

    <h2>Sorrend teszt</h2>

    <p>Első elem</p>
    <p>Második elem</p>
    <p>Harmadik elem</p>

</body>
</html>
