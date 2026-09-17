<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Изменение услуги</title>
</head>
<body>
<x-header/>
<main>
    <x-ui.container class="flex flex-col items-center">

        <form class="flex flex-col w-xl bg-sky-200 p-4 rounded-lg shadow-xl gap-2 mt-20"
              action="{{ route('service.update', $service) }}"
              method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h1 class="text-3xl text-center font-medium">Изменение услуги</h1>
            <div class="flex flex-col gap-1">
                <div class="flex justify-between">
                    <label for="title">Название услуги*</label>
                    @error('title')
                    <div class="text-red-600">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <input class="bg-white rounded-lg p-2" name="title" type="text" value="{{old('title', $service->title)}}" placeholder="Введите название услуги">
            </div>
            <div class="flex flex-col gap-1">
                <div class="flex justify-between">
                    <label for="title">Описание услуги*</label>
                    @error('description')
                    <div class="text-red-600">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <textarea rows="5" class="bg-white rounded-lg p-2" name="description" type="text" placeholder="Введите описание услуги">{{old('description', $service->description)}}</textarea>
            </div>
            <div class="flex flex-col gap-1">
                <div class="flex justify-between">
                    <label for="title">Цена услуги*</label>
                    @error('price')
                    <div class="text-red-600">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <input class="bg-white rounded-lg p-2" name="price" type="number" step="0.01" min="0" value="{{old('price', $service->price)}}" placeholder="Введите цену услуги">
            </div>
            <div class="flex flex-col gap-1">
                <div class="flex justify-between">
                    <label for="title">Фотография услуги*</label>
                    @error('image_path')
                    <div class="text-red-600">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="w-full flex">
                    <img width="50" height="50" src="{{asset('storage/'. $service->image_path)}}" alt="Изображение усулуги"/>
                    <input class="bg-white rounded-lg w-full p-2 cursor-pointer file:bg-sky-400 file:transition-colors file:duration-300 file:text-white file:px-4 file:py-1 file:hover:bg-sky-400/60 file:rounded-lg" name="image_path" type="file">
                </div>
               </div>
            <button type="submit" class="bg-sky-400 text-white py-1 cursor-pointer transition-colors duration-300 hover:bg-blue-300 font-medium rounded-lg text-lg">Сохранить</button>
        </form>
    </x-ui.container>
</main>
<x-footer/>
</body>
</html>
