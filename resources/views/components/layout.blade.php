<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toko Iklan</title>

    @vite('resources/css/app.css')
    @filamentStyles
</head>
<body class="antialiased">
    
    {{ $slot }}
    
    @filamentScripts
</body>
</html>