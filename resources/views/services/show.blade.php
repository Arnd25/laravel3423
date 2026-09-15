<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Услуга {{$service->title}}</title>
</head>
<body>
<x-header/>
<main>
    <x-ui.container>
        <h1>{{$service->title}}</h1>
    </x-ui.container>
</main>
<x-footer/>
</body>
</html>
