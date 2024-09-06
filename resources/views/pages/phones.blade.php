<x-layout>
    <x-slot:heading>
        <h1 class="uppercase text-lg text-[#2c2c2c] font-bold text-center mt-10 ">
            Phones
        </h1>
    </x-slot:heading>

    <section class="w-full h-full flex flex-wrap gap-7 justify-center mt-10 ">
        @if ($phones->count())
            @foreach ($phones as $phone)
                <x-product :name="$phone->name" :price="$phone->price" :imageurl="$phone->image_url" :id="$phone->id" />
            @endforeach
        @else
            <h2>No Phones available</h2>
        @endif



    </section>
    @if ($phones->count())
        {{ $phones->links() }}
    @endif
    </div>
</x-layout>
