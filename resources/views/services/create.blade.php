<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Создание услуги</title>
</head>
<body>
    @if(session('success'))
        <div class="">
            {{session('success')}}
        </div>
    @endif
    <div class="max-w-6xl px-4 mx-auto justify-center flex items-center">
        <form class="" action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            @error('title')
            <div class="">
                {{$message}}
            </div>
            @enderror
            <input name="title" type="text" placeholder="Введите название услуги">
            @error('description')
            <div class="">
                {{$message}}
            </div>
            @enderror
            <textarea rows="4"  name="description" placeholder="Введите описание услуги"></textarea>
            @error('price')
            <div class="">
                {{$message}}
            </div>
            @enderror
            <input type="number" name="price" placeholder="Введите цену услуги"/>
            @error('image_path')
            <div class="">
                {{$message}}
            </div>
            @enderror
            <input type="file" placeholder="Ввыберете изображение" name="image_path">
            <button type="submit">Сохранить</button>
        </form>
    </div>
</body>
</html>
