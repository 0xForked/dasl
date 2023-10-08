 <div class="absolute z-10 bottom-0 right-0 bg-gray-100 w-[330px] h-[430px] m-8 p-6 rounded-md">
    <h5 class="text-xl font-semibold mb-4">Keterangan: </h5>
    @foreach($descriptions as $description)
        <div class="flex flex-row gap-4 mb-2">
            <img class="w-16 h-6" src="https://w7.pngwing.com/pngs/327/213/png-transparent-states-of-germany-city-map-capital-city-map-blue-city-world.png" alt="ibukota">
            <p>{!! $description->name !!}</p>
        </div>
    @endforeach
</div>
