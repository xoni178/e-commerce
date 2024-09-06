@props(['active' => false])
<li>
    <a class="{{ $active ? 'text-blue-800' : 'text-gray-700' }} md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-blue-800 md:p-0"
        {{ $attributes }}>
        {{ $slot }}
    </a>
</li>
