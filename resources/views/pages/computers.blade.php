<x-layout>
    <x-slot:heading>
        <h1 class="uppercase text-lg text-[#2c2c2c] font-bold text-center mt-10 ">
            Computers
        </h1>
    </x-slot:heading>

    <section class="w-full h-full flex flex-wrap gap-7 justify-center mt-10 ">
        @if ($computers->count())
            @foreach ($computers as $computer)
                <x-product :name="$computer->name" :price="$computer->price" :imageurl="$computer->image_url" :id="$computer->id" />
            @endforeach
        @else
            <h2>No Computers available</h2>
        @endif

    </section>
    @if ($computers->count())
        {{ $computers->links() }}
    @endif
    </div>
</x-layout>
