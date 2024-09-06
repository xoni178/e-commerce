<x-layout>
    <x-slot:heading>
        <h1 class="uppercase text-lg text-[#2c2c2c] font-bold text-center mt-10 ">
            Laptops
        </h1>
    </x-slot:heading>

    <section class="w-full h-full flex flex-wrap gap-7 justify-center mt-10 ">
        @if ($laptops->count())
            @foreach ($laptops as $laptop)
                <x-product :name="$laptop->name" :price="$laptop->price" :imageurl="$laptop->image_url" :id="$laptop->id" />
            @endforeach
        @else
            <h2>No Laptops available</h2>
        @endif

    </section>
    @if ($laptops->count())
        {{ $laptops->links() }}
    @endif

    </div>
</x-layout>
