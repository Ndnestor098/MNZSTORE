
@php
$classes = isset( $resposive )
    ? 'mr-auto text-3xl font-bold leading-none'
    : 'text-3xl font-bold leading-none';
@endphp


<a class="{{ $classes }}" href="{{ route('home') }}">
    MNZSTORE
</a>