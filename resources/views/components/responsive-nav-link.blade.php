@php
$classes = ( Route::is( $route ) )
            ? 'block p-4 text-sm font-semibold bg-blue-50 text-blue-600 rounded'
            : 'block p-4 text-sm font-semibold hover:bg-blue-50 hover:text-blue-600 rounded';
@endphp

<li class="mb-1">
    <a class="{{ $classes }}" href="{{ route( $route ) }}">{{ $name }}</a>
</li>
