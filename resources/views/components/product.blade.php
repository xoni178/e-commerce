@props(['name' => 'placeholder', 'price' => 00.0, 'imageurl' => '', 'id' => null])
<div class="w-56 h-96 p-2 flex justify-center items-center flex-col gap-1 bg-white rounded shadow-lg">
    <div class="w-full h-[60%] flex justify-center items-center"><img src="{{ $imageurl }}"
            class="w-full h-full object-contain">
    </div>
    <div class="w-full h-[25%] flex flex-col justify-between items-end ">
        <h3 class="text-black text-base">
            <a href="/product/{{ $id }}">{{ strlen($name) > 80 ? substr($name, 0, 80) . '...' : $name }}</a>
        </h3>
        <span class="text-black text-lg font-bold">{{ $price }}€</span>
    </div>
    <div class="w-full h-[15%] flex flex-col justify-end items-center">
        <x-button>Add to cart</x-button>
    </div>
</div>
