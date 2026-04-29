import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class', // 1. Enable Dark Mode here
    theme: {
        extend: {
            colors: {
                brand: '#3b82f6', // A clean "Library Blue"
                accent: '#10b981', // A "Bookish Emerald"
            },
            fontFamily: {
                sans: ['Inter', 'sans-serif'], // 2. Change font
            },
        },
    },
};