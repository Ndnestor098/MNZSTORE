@php
$classes = Route::is( $route )
            ? 'text-sm text-blue-600 font-bold' 
            : 'text-sm text-gray-400 hover:text-gray-500';
@endphp

<li>
    <a class="{{ $classes }}" href="{{ route( $route ) }}">
        {{ $name }}
    </a>
</li>

@if (!isset( $noSelect ))
    {{-- button style --}}
    <li class="text-gray-300">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
        </svg>
    </li>
@endif

