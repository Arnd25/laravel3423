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
    <x-header/>
    <main>
        <x-ui.container class="flex flex-col items-center">
            @if (session('success'))
                <div class="fixed right-6 top-26 z-99 rounded-xl bg-green-50 px-5 py-4 text-green-700 shadow-lg">
                    Услуга создана
                </div>
            @endif
                <form class="flex flex-col w-xl bg-sky-200 p-4 rounded-lg shadow-xl gap-2 mt-20" action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <h1 class="text-3xl text-center">Создание услуги</h1>
                    <div class="flex flex-col gap-1">
                        <div class="flex justify-between">
                            <label for="title">Название услуги*</label>
                            @error('title')
                            <div class="text-red-600">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <input class="bg-white rounded-lg p-2" name="title" type="text" placeholder="Введите название услуги">
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
                        <input class="bg-white rounded-lg p-2" name="description" type="text" placeholder="Введите описание услуги">
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
                        <input class="bg-white rounded-lg p-2" name="price" type="number" step="0.01" min="0" placeholder="Введите цену услуги">
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

                        <input class="bg-white rounded-lg p-2 cursor-pointer file:bg-sky-400 file:transition-colors file:duration-300 file:text-white file:px-4 file:py-1 file:hover:bg-sky-400/60 file:rounded-lg" name="image_path" type="file">
                    </div>
                    <button type="submit" class="bg-sky-400 text-white py-1 cursor-pointer transition-colors duration-300 hover:bg-blue-300 font-medium rounded-lg text-lg">Сохранить</button>
                </form>
        </x-ui.container>
    </main>
    <x-footer/>
</body>
</html>
