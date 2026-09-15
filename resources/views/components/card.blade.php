<li class="rounded-2xl flex flex-col bg-gray-100 p-5 gap-15">
    <div class="flex flex-col w-full gap-5">
        <div class="flex justify-between w-full">
            <img src="{{ asset('/storage/google.webp') }}" alt="логотим" class="max-w-12 rounded-full p-2 border border-gray-300 ">
            <button class="font-semibold h-fit text-black text-ms rounded-lg border-gray-200 bg-gray-200 border py-2 px-5 flex gap-1 items-center">
                Saved
                <img src="{{asset('storage/bookmark.png')}}" alt="saved icon" class="w-5 h-5"/>
            </button>
        </div>
        <div class="flex flex-col gap-2">
            <div class="flex gap-2.5 items-center font-semibold">
                <p class="font-semibold text-black">Google</p>
                <p class="text-gray-400 text-sm">30 days ago</p>
            </div>
            <h3 class="text-2xl font-semibold text-black">Graphic Designer</h3>
            <div class="flex gap-1.5 ">
                <p class="bg-gray-300 text-black py-2 px-3 text-sm font-medium rounded-lg">Full-time</p>
                <p class="bg-gray-300 text-black py-2 px-3 text-sm font-medium rounded-lg">Full-time</p>
            </div>
        </div>
    </div>
    <div class="border-t border-t-gray-300 flex justify-between pt-5">
        <div class="flex flex-col font-normal">
            <p class="text-lg text-black font-medium">$120-220k</p>
            <p class="text-gray-400 text-sm">Mountain View, CA</p>
        </div>
        <button class="text-white bg-black rounded-lg py-1 px-3">Apply now</button>
    </div>
</li>
