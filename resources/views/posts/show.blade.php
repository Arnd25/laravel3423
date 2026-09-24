<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Услуга {{$post->title}}</title>
</head>
<body>
<x-header/>
<main>
    <x-ui.container class="my-10 flex flex-col">
        <a href="{{route('posts.index')}}" class="text-xl bg-indigo-500 text-white px-5 py-2 rounded-lg mb-5 w-fit flex gap-1">
            <img class="invert rotate-90 w-6" src="{{asset('storage/arrow.svg')}}" alt=""> Вернуться
        </a>
        <div class="flex flex-col px-8 py-5 bg-indigo-100 rounded-xl">
            <div class="flow-root">
                <img
                    src="{{ asset('storage/' . $post->main_image) }}"
                    alt="{{ $post->title }}"
                    class="float-left mr-6 mb-3 h-auto w-2/5 rounded-xl object-cover"
                />
                <div class="flow-root border-b-2 border-b-gray-300 pb-4">
                    <h1 class="wrap-break-word text-5xl font-bold">
                        {{ $post->title }}
                    </h1>
                    <div class="flex justify-between gap-7 items-center">
                        <div class="flex items-center gap-4 mt-2 text-gray-700">
                            {{$post->description}}
                        </div>
                    </div>
                    <div class="flex gap-2 flex-wrap">
                        @foreach($post->tags as $tag)
                            <p class="bg-indigo-500 rounded-lg py-1 px-4 text-white font-lg">{{$tag}}</p>
                        @endforeach
                    </div>
                </div>
                <p class="mt-5 text-lg whitespace-pre-line wrap-break-word">{{$post->content}}</p>
            </div>
            <div class="grid grid-cols-{{count($post->additional_images)}} place-items-center max-w-full gap-2 p-4">
                @foreach($post->additional_images as $image)
                    <img
                        src="{{ asset('storage/' . $image) }}"
                        alt="{{ $post->title }}"
                        class="bg-sky-50 rounded-lg object-contain h-full max-h-80 "
                    />
                @endforeach

            </div>
        </div>




    </x-ui.container>
</main>
<x-footer/>
</body>
</html>
