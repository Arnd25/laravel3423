<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Список услуг</title>
</head>
<body>
    <x-header/>
    <main>
        <x-ui.container>
            <ul class="grid grid-cols-4">
                @foreach($services as $service)
                    <li class="">
                        <span>{{$service->title}}</span>
                        <br>
                        <span>{{$service->price}}</span>
                        <a href="{{route('service.show' , $service->id)}}">Подробнее</a>
                    </li>
                @endforeach
            </ul>
        </x-ui.container>
    </main>
    <x-footer/>
</body>
</html>
