<div class="w-full flex flex-row items-center justify-between mt-2">
    <a href="/" class="flex">
        <img width="35" height="35" src="https://img.icons8.com/office/40/logo.png" alt="logo" />
        <span class="self-center text-lg font-semibold whitespace-nowrap text-[#2c2c2c]">
            E-Commerce
        </span>
    </a>

    <button data-collapse-toggle="mobile-menu-3" type="button"
        class="md:hidden text-gray-400 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300 rounded-lg inline-flex items-center justify-center"
        aria-controls="mobile-menu-3" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"></path>
        </svg>
        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
        </svg>
    </button>

    <div
        class="md:flex justify-between items-center w-full md:w-auto  bg-gray-50 border border-gray-300 p-2 rounded-lg">
        <ul class="flex-col md:flex-row flex md:space-x-8 mt-4 md:mt-0 md:text-sm md:font-medium">
            <li class="md:bg-transparentblock pl-3 pr-4 py-2 md:p-0 rounded">
                <span>Filter:</span>
            </li>
            <x-nav-link :active="request()->is('/')" href="/">All Products</x-nav-link>
            <x-nav-link :active="request()->is('computers')" href="/computers">Computers</x-nav-link>
            <x-nav-link :active="request()->is('laptops')" href="/laptops">Laptops</x-nav-link>
            <x-nav-link :active="request()->is('monitors')" href="/monitors">Monitors</x-nav-link>
            <x-nav-link :active="request()->is('phones')" href="/phones">Phones</x-nav-link>

        </ul>
    </div>

    <div class="flex flex-row items-center gap-2">
        <div class="flex flex-row items-center relative">
            <span class="absolute bg-red-200 rounded-lg text-[0.5rem] px-1 left-[-0.75rem] top-[-0.2rem]">Admin</span>
            <x-button onclick="location.href = '/create'" class="">Create Product</x-button>
        </div>
        @guest
            <x-button onclick="location.href = '/login'">Log In</x-button>
            <x-button onclick="location.href = '/register'">Register</x-button>
        @endguest
        @auth
            @php
                $user = Illuminate\Support\Facades\Auth::user();
            @endphp

            <div class="flex flex-row justify-center gap-2 bg-gray-50 p-1 rounded">
                <label for="profile_icon">{{ $user->first_name }}</label>
                <svg name="profile_icon" xmlns="http://www.w3.org/2000/svg" width="25px" height="25px"
                    viewBox="0 0 24 24" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M16.5 7.063C16.5 10.258 14.57 13 12 13c-2.572 0-4.5-2.742-4.5-5.938C7.5 3.868 9.16 2 12 2s4.5 1.867 4.5 5.063zM4.102 20.142C4.487 20.6 6.145 22 12 22c5.855 0 7.512-1.4 7.898-1.857a.416.416 0 0 0 .09-.317C19.9 18.944 19.106 15 12 15s-7.9 3.944-7.989 4.826a.416.416 0 0 0 .091.317z"
                        fill="#000000" />
                </svg>
            </div>
            <form action="/logout" method="POST">
                @csrf
                <x-button type="submit">Log Out</x-button>
            </form>
        @endauth
    </div>
</div>
