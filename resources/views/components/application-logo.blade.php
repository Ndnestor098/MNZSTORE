
@php
$classes = isset( $resposive )
    ? 'mr-auto text-3xl font-bold leading-none'
    : 'text-3xl font-bold leading-none';
@endphp


<a class="{{ $classes }}" href="{{ route('home') }}">
    <img 
        src="/assets/image/logo_1.png" 
        alt="logo"
        class="w-[120px] mx-2"
    >
</a>