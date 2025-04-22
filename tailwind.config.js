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
                poppins: ['Poppins', 'sans-serif'],
            },
            boxShadow: {
                principal_hover: " 0px 5px 14px 4px rgba(42,103,184,0.88)",
            },
            colors : {
                color_1 : "#000103",
                color_2 : "#003683",
                color_3 : "#01224b",
                color_4 : "#81ADE6",
            },
            height : {
                'panel': 'calc(100vh - 72px)'
            },
            backgroundImage: {
                'feature-section': "url('https://cdn.pixabay.com/photo/2015/05/31/15/18/technology-792180_960_720.jpg')",                
            }
        },
    },

    plugins: [forms],
};
