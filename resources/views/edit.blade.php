{{-- value="{{ $product->image_url }}" --}}
<x-layout>
    <x-slot:heading>
        <h1 class="uppercase text-lg text-[#2c2c2c] font-bold text-center mt-10 ">
            Edit Product
        </h1>
    </x-slot:heading>

    <section class="w-fit h-fit mt-10 mx-auto p-20 bg-gray-50 rounded">

        <form action="{{ '/product' . '/' . $product->id }}" method="POST" class="flex flex-col items-start gap-3">
            @csrf
            @method('PATCH')

            <x-input-field value="{{ $product->name }}" name="product_name">Name:</x-input-field>

            @error('product_name')
                <p class="text-xs text-red-500 italic">{{ $message }}</p>
            @enderror

            <x-input-field value="{{ $product->price }}" name="product_price">Price:</x-input-field>

            @error('product_price')
                <p class="text-xs text-red-500 italic">{{ $message }}</p>
            @enderror

            <x-input-field value="{{ $product->image_url }}" name="product_image-url">Image Url:</x-input-field>

            @error('product_image-url')
                <p class="text-xs text-red-500 italic">{{ $message }}</p>
            @enderror

            <x-input-field value="{{ $product->product_type }}" name="product_type">Product Type:</x-input-field>

            @error('product_type')
                <p class="text-xs text-red-500 italic">{{ $message }}</p>
            @enderror

            <x-input-field value="{{ $product->brand }}" name="brand">Product Brand:</x-input-field>

            @error('brand')
                <p class="text-xs text-red-500 italic">{{ $message }}</p>
            @enderror
            <div class="w-full flex flex-row justify-between">
                <div>
                    <x-button type="submit" form="delete-form">Delete</x-button>
                </div>
                <div class="flex flex-row w-fit gap-1">
                    <x-button type="submit">Update</x-button>
                    <x-button type="button"
                        onclick="location.href = '{{ '/product' . '/' . $product->id }}'">Cancel</x-button>
                </div>
            </div>


        </form>
        <form action="{{ '/product' . '/' . $product->id }}" method="POST" id="delete-form" class="hidden">
            @csrf
            @method('DELETE')
        </form>
    </section>
    </div>
</x-layout>
