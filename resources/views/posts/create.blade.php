<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Создание статьи</title>
</head>
<body>
<x-header/>
<main>
    <x-ui.container class="flex flex-col py-10">
        <a href="{{route('posts.index')}}" class="text-xl bg-indigo-500 text-white px-5 py-2 rounded-lg mb-5 w-fit flex gap-1">
            <img class="invert rotate-90 w-6" src="{{asset('storage/arrow.svg')}}" alt=""> Вернуться
        </a>
        <form class="flex flex-col bg-indigo-200 p-4 rounded-lg shadow-xl gap-2" action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <h1 class="text-3xl font-semibold text-center">Создание статьи</h1>
            <div class="grid grid-cols-2 gap-5">
                <div class="flex flex-col gap-2">
                    <div class="flex flex-col gap-1">
                        <div class="flex justify-between">
                            <label class="font-medium" for="title">Название статьи*</label>
                            @error('title')
                            <div class="text-red-600 text-right">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <input class="bg-white rounded-lg p-2" name="title" type="text" placeholder="Введите название статьи">
                    </div>
                    <div class="flex flex-col gap-1">
                        <div class="flex justify-between">
                            <label class="font-medium" for="title">Описание статьи*</label>
                            @error('description')
                            <div class="text-red-600 text-right">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <textarea rows="4" class="bg-white rounded-lg p-2" name="description" type="text" placeholder="Введите описание статьи"></textarea>
                    </div>
                    <div class="flex flex-col gap-1">
                        <div class="flex justify-between">
                            <label class="font-medium" for="title">Фотография статьи*</label>
                            @error('main_image')
                            <div class="text-red-600 text-right">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <input class="bg-white rounded-lg p-2 cursor-pointer file:bg-indigo-400 file:transition-colors file:duration-300 file:text-white file:px-4 file:py-1 file:hover:bg-indigo-400/60 file:rounded-lg" name="main_image" type="file" >
                    </div>
                    <div class="flex flex-col gap-1">
                        <div class="flex justify-between">
                            <label class="font-medium" for="title">Теги статьи(через ",")*</label>
                            @error('tags')
                            <div class="text-red-600 text-right">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <input class="bg-white rounded-lg p-2" name="tags" type="text" placeholder="Введите название статьи">
                    </div>
                    <div class="flex flex-col gap-1">
                        <div class="flex justify-between">
                            <label class="font-medium" for="title">Дополнительные фотографии статьи*</label>
                            @error('additional_images')
                            <div class="text-red-600 text-right ">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <input class="bg-white rounded-lg p-2 cursor-pointer file:bg-indigo-400 file:transition-colors file:duration-300 file:text-white file:px-4 file:py-1 file:hover:bg-indigo-400/60 file:rounded-lg" name="additional_images[]" type="file" multiple>
                    </div>
                </div>
                <div class="flex flex-col gap-1">
                    <div class="flex justify-between">
                        <label class="font-medium"  for="content">Контент статьи*</label>
                        @error('content')
                        <div class="text-red-600 text-right">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <textarea class="bg-white h-full rounded-lg p-2" name="content" type="text" placeholder="Введите контент статьи"></textarea>
                </div>

            </div>

            <button type="submit" class="bg-indigo-400 text-white py-1 cursor-pointer transition-colors duration-300 hover:bg-indigo-800 font-medium rounded-lg text-lg">Сохранить</button>
        </form>
    </x-ui.container>
</main>
<x-footer/>
</body>
</html>
