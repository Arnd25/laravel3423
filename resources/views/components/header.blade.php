<header class="py-5 w-full bg-gray-50 border-b border-b-zinc-400">
    <div class="max-w-6xl px-4 mx-auto flex items-center justify-between">
        <div class="">
            <a href="/" class="font-bold text-xl text-gray-900">my <span class="text-blue-600 uppercase">aaa</span></a>
        </div>
        <div class="flex items-center gap-7">
            <nav class="">
                <menu class="flex items-center gap-4">
                    <li class=""><a href="#" class="uppercase text-gray-500 font-medium hover:text-gray-800 duration-300 transition-colors text-sm">Главаная</a></li>
                    <li class=""><a href="{{ route('service.index') }}" class="uppercase text-gray-500 font-medium hover:text-gray-800 duration-300 transition-colors text-sm">Услуги</a></li>
                    <li class=""><a href="{{route('posts.index')}}" class="uppercase text-gray-500 font-medium hover:text-gray-800 duration-300 transition-colors text-sm">Статьи</a></li>
                    <li class=""><a href="#" class="uppercase text-gray-500 font-medium hover:text-gray-800 duration-300 transition-colors text-sm">Цены</a></li>
                </menu>
            </nav>
            <ul class="flex items-center gap-4">
                <li class="inline-flex">
                    <a href="#" class="px-6 py-4 text-white bg-blue-500 font-medium rounded-lg duration-300 transition-colors hover:bg-blue-600">Заказать звонок</a>
                </li>
            </ul>
        </div>
    </div>
</header>
