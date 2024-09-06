<x-layout>
    <x-slot:heading>
        <h1 class="uppercase text-lg text-[#2c2c2c] font-bold text-center mt-10 ">
            Monitors
        </h1>
    </x-slot:heading>

    <section class="w-full h-full flex flex-wrap gap-7 justify-center mt-10 ">
        @if ($monitors->count())
            @foreach ($monitors as $monitor)
                <x-product :name="$monitor->name" :price="$monitor->price" :imageurl="$monitor->image_url" :id="$monitor->id" />
            @endforeach
        @else
            <h2>No Monitors available</h2>
        @endif

    </section>
    @if ($monitors->count())
        {{ $monitors->links() }}
    @endif

    </div>
</x-layout>
