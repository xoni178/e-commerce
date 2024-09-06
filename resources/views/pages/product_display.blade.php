<x-layout>
    <x-slot:heading>
        <h1 class="uppercase text-lg text-[#2c2c2c] font-bold text-center mt-10 ">
        </h1>
    </x-slot:heading>
    <section class="relative w-full h-[550px] mx-auto bg-white flex flex-row justify-around rounded pl-5 shadow-lg">
        <div class="absolute w-[20px] h-[10px] top-0 left-2 ">
            <a href="/product/{{ $product->id }}/edit" class="bg-gray-50 border h-full px-[0.1rem] text-xs">edit</a>
            <a href="/" class="bg-gray-50 border h-full px-[0.3rem] text-xs">back</a>
        </div>
        <div class="flex justify-center items-center overflow-hidden">
            @php
                $image_url = substr($product->image_url, 0, -3) . '400';
            @endphp
            <img src="{{ $image_url }}" width="400" alt="image"
                class="object-contain w-[400px] h-[230px] mx-auto">
        </div>
        <div class="flex flex-col justify-center gap-3">
            <div>
                <span class="text-sm lowercase">{{ $product->brand }}</span>
                <h1 class="text-3xl max-w-[450px]">{{ $product->name }}</h1>
            </div>
            <div class="text-4xl font-bold">{{ $product->price }} €</div>

            <div class="flex items-center pt-2 mb-1">
                <span class="text-xs text-gray-600 whitespace-nowrap">Payment in installments</span>
                <hr class="w-full bg-gray-100 ml-2">
            </div>

            <div class="border gap-2 flex flex-wrap items-center rounded px-2 py-1 font-medium text-xs mt-2 relative">
                <img width="44" height="32" class="relative" src="{{ asset('/storage/rbko.png') }}"
                    alt="Raifeissen Bank">
                <img width="44" height="32" class="relative" src="{{ asset('/storage/teb.png') }}"
                    alt="Teb Bank">
                up to 12 installments without interest for only
                <span class="text-primary font-bold ">{{ round($product->price / 12, 2) }} €/month</span>
            </div>



            <button class="bg-yellow-200 text-xl px-20 uppercase rounded-sm shadow-md">Buy now</button>
            <div class="flex items-center pt-2 mb-1">
                <span class="text-xs text-gray-600 whitespace-nowrap">or</span>
                <hr class="w-full bg-gray-100 ml-2">
            </div>
            <button class="bg-white text-xl px-20 uppercase rounded-sm shadow-md">ADD TO CART</button>
        </div>
    </section>
    <section class="w-full h-fit bg-white pb-10 px-10 rounded mt-10">
        <div class="flex justify-center items-center border-b-2 mb-2 pt-2">
            <p>Description</p>
        </div>
        <div>
            <p>{{ $product->description }}</p>
        </div>
    </section>
</x-layout>
