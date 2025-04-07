@php
$classes_1 = isset( $resposive )
            ? "block px-4 py-3 mb-3 leading-loose text-xs text-center text-white font-semibold bg-color_1 transition-all duration-300 hover:bg-gray-100 hover:text-gray-800 rounded-xl"
            : "hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-color_1 transition-all duration-300 hover:bg-gray-50 hover:text-gray-800 text-sm text-white font-bold rounded-xl transition duration-200";
$classes_2 = isset( $resposive )
            ?"block px-4 py-3 mb-2 leading-loose text-xs text-center text-gray-800 font-semibold bg-gray-100 transition-all duration-300 hover:bg-color_1 hover:text-white rounded-xl"
            : "hidden lg:inline-block py-2 px-6 bg-gray-50 transition-all duration-300 hover:bg-color_1 hover:text-white text-sm text-gray-800 font-bold rounded-xl transition duration-200";
@endphp


<a class="{{ $classes_1 }}" href="#">
    Sign In
</a>

<a class="{{ $classes_2 }}" href="#">
    Sign up
</a>