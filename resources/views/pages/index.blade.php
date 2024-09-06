<x-layout>
    <x-slot:heading>
        <h1 class="uppercase text-lg text-[#2c2c2c] font-bold text-center mt-10 ">
            All products
        </h1>
    </x-slot:heading>

    <section class="w-full h-[801px] flex flex-wrap gap-7 justify-center mt-10 mb-10 pb-20">
        @if ($products->count())
            @foreach ($products as $product)
                <x-product :name="$product->name" :price="$product->price" :imageurl="$product->image_url" :id="$product->id" />
            @endforeach
        @else
            <h2>No Products available</h2>
        @endif

    </section>
    @if ($products->count())
        {{ $products->links() }}
    @endif

    </div>
</x-layout>
