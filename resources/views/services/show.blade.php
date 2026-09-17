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
    <x-ui.container class="my-10 flex flex-col">
        <a href="{{url()->previous()}}" class="text-xl bg-blue-500 text-white px-5 py-2 rounded-lg mb-5 w-fit flex gap-1">
            <img class="invert rotate-90 w-6" src="{{asset('storage/arrow.svg')}}" alt=""> Вернуться</a>
        <div class="gap-8 flow-root px-8 py-5 bg-indigo-50 rounded-xl">
            <img
                src="{{ asset('storage/' . $service->image_path) }}"
                alt="{{ $service->title }}"
                class="float-left mr-6 mb-3 h-auto w-2/5 rounded-xl object-cover"
            />
            <div class="flow-root border-b-2 border-b-gray-300 pb-4">
                <h1 class="wrap-break-word text-5xl font-bold">
                    {{ $service->title }}
                </h1>
                <div class="flex justify-between gap-7 items-center">
                    <p class="mt-4 text-4xl font-semibold text-indigo-700">
                        {{ $service->price }}$
                    </p>
                    <div class="flex items-center gap-4">
                        <button
                            class="box-border flex h-12 items-center rounded-lg border-2 border-blue-400 bg-sky-50 px-6 text-xl transition-colors duration-300 hover:bg-blue-400/60"
                        >
                            Связаться
                        </button>

                        <button
                            class="box-border flex h-12 items-center rounded-lg bg-blue-500 px-6 text-xl text-white transition-colors duration-300 hover:bg-blue-500/60"
                        >
                            Купить
                        </button>
                    </div>
                </div>


            </div>
            <p class="mt-5 text-lg whitespace-pre-line wrap-break-word">{{$service->description}}</p>
        </div>
    </x-ui.container>
</main>
<x-footer/>
</body>
</html>
