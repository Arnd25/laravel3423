<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Список статьи</title>
</head>
<body>
<x-header/>
<main>
    <x-ui.container class="flex flex-col py-5">
        <a class="self-center bg-indigo-500 text-white py-3 px-5 font-medium rounded-xl" href="{{route('posts.create')}}">Добавить +</a>

        <ul class="grid grid-cols-4 gap-4 my-5">
            @foreach($posts as $post)
                <li class="bg-indigo-100 rounded-lg p-3 flex flex-col gap-2 transition-all duration-300 hover:scale-105 hover:shadow-xl h-fit">
                    <img src="{{asset('/storage/' . $post->main_image)}}" alt="Фотография услуги {{$post->id}}" width="255" height="255"
                         class="rounded-lg w-full bg-sky-50 h-52 object-contain"/>
                    <div class="flex flex-col bg-white p-2 justify-center  rounded-lg">
                        <h2 class="line-clamp-2 break-all text-xl font-semibold text-center">
                            {{ $post->title }}
                        </h2>
                        <div class="flex gap-1 justify-center flex-wrap  my-1 line-clamp-2 max-h-12 overflow-hidden">
                            @foreach($post->tags as $tag)
                                <p class="bg-indigo-300 rounded-md h-5 px-2 text-sm">{{$tag}}</p>
                            @endforeach
                        </div>
                        <p class="line-clamp-4 whitespace-pre-line break-all text-gray-600 text-sm border-t border-t-indigo-200 pt-2"
                        >{{ $post->description }}</p>
                    </div>
                    <div class="flex gap-1.5 w-full mt-auto">
                        <a class="bg-teal-800 rounded-lg w-full py-1 text-center text-lg font-medium cursor-pointer transition-colors duration-300 text-white hover:bg-teal-600" href="{{route('posts.edit' , $post->id)}}">Изменить</a>
                        <form action="{{route('posts.destroy', $post->id)}}"
                              class="w-fit"
                              method="post">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-800/40 rounded-lg  py-1 px-2 h-full    text-center text-lg font-medium cursor-pointer transition-colors hover d: duration-300 text-white hover:bg-red-700" type="submit">
                                <img src="https://img.icons8.ru/?size=100&id=4B0kCMNiLlmW&format=png&color=000000" alt="" class="h-5 w-7">
                            </button>
                        </form>
                    </div>
                    <a class="bg-indigo-500 rounded-lg w-full py-1 text-center text-lg font-medium cursor-pointer transition-colors duration-300 text-white hover:bg-indigo-600" href="{{route('posts.show' , $post->id)}}">Подробнее</a>
                </li>
            @endforeach
        </ul>
    </x-ui.container>
</main>
<x-footer/>
</body>
</html>
