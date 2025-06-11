@props(['href', 'current' => false, 'ariaCurrent' => false])

@php
    // $clases = $current ? 'bg-gray-900 text-white' : 'text-gray-300 hover:text-white';

    if ($current) {
        $clases = 'bg-gray-900 text-white';
        $ariaCurrent = 'page';
    } else {
        $clases = 'text-gray-300 hover:text-white';
    }

@endphp

<a href="{{ $href }}" .
    {{ $attributes->merge(['class' => 'rounded-md px-3 py-2 text-sm font-medium ' . $clases, 'aria-current' => $ariaCurrent]) }}
    class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
    {{ $slot }}
</a>
