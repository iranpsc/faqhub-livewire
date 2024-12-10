import defaultTheme from 'tailwindcss/defaultTheme';
const plugin = require('tailwindcss/plugin');

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        'node_modules/preline/dist/*.js',
        './src/**/*.{html,js}',
    ],
    theme: {
        extend: {
            screens: {
                '3xl': '1850px',
            },
            colors: {
                'primery-blue': '#2667FF',
                'dark-yellow': '#FFC700',
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                azarMehr: ['AzarMehr', 'sans-serif'],
                rohk: ['Rokh', 'sans-serif'],
            },
        },
    },
    plugins: [
        require('tailwind-scrollbar'),
        require('preline/plugin'),
        require('@tailwindcss/forms'),
        plugin(function ({ addVariant }) {
            addVariant('child', '& > *');
            addVariant('child-hover', '& > *:hover');
        }),
    ],
    darkMode: 'class',
};
