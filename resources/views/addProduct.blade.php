<x-layout>
    <x-slot:heading>
        <h1 class="uppercase text-lg text-[#2c2c2c] font-bold text-center mt-10 ">
            Create Product
        </h1>
    </x-slot:heading>

    <section class="w-fit h-fit mt-10 mx-auto p-20 bg-gray-50 rounded">

        <form action="/" method="post" class="flex flex-col items-start gap-3">
            @csrf
            <x-input-field name="product_name">Name:</x-input-field>

            @error('product_name')
                <p class="text-xs text-red-500 italic">{{ $message }}</p>
            @enderror


            <x-input-field name="product_price">Price:</x-input-field>

            @error('product_price')
                <p class="text-xs text-red-500 italic">{{ $message }}</p>
            @enderror

            <x-input-field name="product_image-url">Image Url:</x-input-field>

            @error('product_image-url')
                <p class="text-xs text-red-500 italic">{{ $message }}</p>
            @enderror

            <x-input-field name="product_type">Product Type:</x-input-field>

            @error('product_type')
                <p class="text-xs text-red-500 italic">{{ $message }}</p>
            @enderror

            <x-input-field name="product_desc">Product Description:</x-input-field>

            @error('product_desc')
                <p class="text-xs text-red-500 italic">{{ $message }}</p>
            @enderror

            <x-input-field name="brand">Product Brand:</x-input-field>

            @error('brand')
                <p class="text-xs text-red-500 italic">{{ $message }}</p>
            @enderror

            <button type="submit">Submit</button>
        </form>
    </section>
    </div>
</x-layout>
