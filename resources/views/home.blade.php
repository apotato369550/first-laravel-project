<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1>Hello world!</h1>
    <p>This is a test</p>
    <a href="{{ url("/test"); }}">Go to test page (via url)</a>
    <a href="{{ route("testPage"); }}">Go to test page (via route)</a>
</body>
</html>