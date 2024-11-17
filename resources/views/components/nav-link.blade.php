@props(['active'])

@php
    $classes = ($active ?? false)
        ? 'bg-gray-100 flex transition duration-100 ease-in-out dark:hover:bg-gray-700 dark:bg-gray-700 items-center p-2 text-black rounded-lg dark:text-white hover:bg-gray-100 group'
        : 'bg-yellow-0 flex transition duration-100 ease-in-out items-center p-2 text-black rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group';

@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>