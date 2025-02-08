import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            boxShadow: {
                principal_hover: " 0px 5px 14px 4px rgba(42,103,184,0.88)",
            },
            colors : {
                color_1 : "#2A67B8",
                color_2 : "#6096e6",
                color_3 : "#f2f2f2",
                color_4 : "#81ADE6",
            },
            height : {
                'panel': 'calc(100vh - 72px)'
            }
        },
    },

    plugins: [forms],
};
