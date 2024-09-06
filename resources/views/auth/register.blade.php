<x-layout>
    <x-slot:heading>
        <h1 class="uppercase text-lg text-[#2c2c2c] font-bold text-center mt-10 ">
            Register
        </h1>
    </x-slot:heading>

    <section class="w-fit h-fit mt-10 mx-auto p-20 bg-gray-50 rounded">
        <form action="/register" method="POST">
            @csrf
            <x-input-field name="first_name">Name:</x-input-field>

            @error('first_name')
                <p class="text-xs text-red-500 italic">{{ $message }}</p>
            @enderror


            <x-input-field name="last_name">Surname:</x-input-field>

            @error('last_name')
                <p class="text-xs text-red-500 italic">{{ $message }}</p>
            @enderror


            <x-input-field type="email" name="email">Email:</x-input-field>

            @error('email')
                <p class="text-xs text-red-500 italic">{{ $message }}</p>
            @enderror


            <x-input-field type="password" name="password">Password:</x-input-field>

            @error('password')
                <p class="text-xs text-red-500 italic">{{ $message }}</p>
            @enderror


            <x-input-field type="password" name="password_confirmation">Confirm Password:</x-input-field>

            @error('password_confirmation')
                <p class="text-xs text-red-500 italic">{{ $message }}</p>
            @enderror


            <div class="flex flex-row justify-between mt-5">
                <x-button type="submit">Register</x-button>
                <x-button type="button" onclick="location.href = '/'">Cancel</x-button>
            </div>

        </form>

    </section>

</x-layout>
