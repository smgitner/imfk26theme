/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './**/*.php',
        './js/**/*.js',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Sora', 'ui-sans-serif', 'system-ui', 'sans-serif'],
            },
        },
    },
    plugins: [],
};
