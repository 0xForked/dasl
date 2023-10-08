<div class="absolute z-10 bottom-0 left-0 bg-gray-100 w-[430px] h-[480px] m-8 p-6 rounded-md">
    <div class="flex flex-row justify-between items-center mb-4">
        <h5 class="text-xl font-semibold">Nama DAS: </h5>
        <button type="button" class="invisible text-gray-500  hover:text-white hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-xl text-sm p-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
        </button>
    </div>
    <div class="flex">
        <div class="w-1/2 pr-2">
            @foreach($watersheds->take(12) as $watershed)
                <a 
                    href="#" 
                    class="flex flex-row gap-4 mb-2 cursor-pointer tracking-tighter hover:border-b-2 hover:border-gray-500"
                    wire:click.prevent="selectWatershed({{ json_encode($watershed) }})"
                >
                    <p class="w-1/6">00{{ $loop->index + 1 }}</p>
                    <p>{{ $watershed->name }}</p>
                </a>
            @endforeach
        </div>
        <div class="w-1/2 pl-2">
            @foreach($watersheds->skip(12)->take(12) as $watershed)
                <a 
                    href="#" 
                    class="flex flex-row gap-4 mb-2 cursor-pointer tracking-tighter hover:border-b-2  hover:border-gray-500"
                    wire:click.prevent="selectWatershed({{ json_encode($watershed) }})"
                >
                    <p class="w-1/6">00{{ $loop->index + 13 }}</p>
                    <p>{{ $watershed->name }}</p>
                </a>
            @endforeach
        </div>
    </div>
</div>