<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME')}}</title>
    @vite(['resourse/css/app.css', 'resourse/js/app.js'])
</head>
<body>
    @if (true)
    <h1>Hello</h1>
    @else
        <h1>bye</h1>
    @endif
    
</body>
</html>