<!DOCTYPE html>
<html>
<head>
    <title>Overzicht van alle planeten</title>
</head>
<body>
    <h1>Overzicht van alle planeten</h1>

    <ul>
        @foreach ($planets as $planet)
            <li><a href="/planets/{{ strtolower($planet['name']) }}">{{ $planet['name'] }}</a></li>
        @endforeach
    </ul>
</body>
</html>
