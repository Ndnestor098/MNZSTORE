@php
$classes_1 = isset( $resposive )
            ? "block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold bg-gray-50 hover:bg-gray-100 rounded-xl"
            : "hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-gray-50 hover:bg-gray-100 text-sm text-gray-900 font-bold rounded-xl transition duration-200";
$classes_2 = isset( $resposive )
            ?"block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-blue-600 hover:bg-blue-700 rounded-xl"
            : "hidden lg:inline-block py-2 px-6 bg-blue-500 hover:bg-blue-600 text-sm text-white font-bold rounded-xl transition duration-200";
@endphp


<a class="{{ $classes_1 }}" href="#">
    Sign In
</a>

<a class="{{ $classes_2 }}" href="#">
    Sign up
</a>