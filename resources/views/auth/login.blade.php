<x-layout>
    <x-slot:heading>
        <h1 class="uppercase text-lg text-[#2c2c2c] font-bold text-center mt-10 ">
            Login
        </h1>
    </x-slot:heading>

    <section class="w-fit h-fit mt-10 mx-auto p-20 bg-gray-50 rounded">
        <form action="/login" method="POST">
            @csrf
            <x-input-field type="email" name="email">Email:</x-input-field>
            @error('email')
                <p class="text-xs text-red-500 italic">{{ $message }}</p>
            @enderror

            <x-input-field type="password" name="password">Password:</x-input-field>

            @error('password')
                <p class="text-xs text-red-500 italic">{{ $message }}</p>
            @enderror


            <div class="flex flex-row justify-between mt-5">
                <x-button type="submit">Login</x-button>
                <x-button type="button" onclick="location.href = '/'">Cancel</x-button>
            </div>

        </form>

    </section>

</x-layout>
