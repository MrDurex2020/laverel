<!DOCTYPE html>
<html>
<head>
    <title>Details van {{ $planet['name'] }}</title>
</head>
<body>
    <h1>Details van {{ $planet['name'] }}</h1>

    <p><strong>Naam:</strong> {{ $planet['name'] }}</p>
    <p><strong>Beschrijving:</strong> {{ $planet['description'] }}</p>

    <p><a href="/planets">Terug naar alle planeten</a></p>
</body>
</html>
