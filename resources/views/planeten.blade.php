<!DOCTYPE html>
<html>
<head>
    <title>Planeten</title>
</head>
<body>
    <h1>Lijst van Planeten</h1>
    <ul>
        @foreach ($planeten as $planeet)
            <li>{{ $planeet }}</li>
        @endforeach
    </ul>
</body>
</html>
