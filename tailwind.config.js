/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    ],
    theme: {
        colors: {
            'blue': '#3C787E',
            'lightbrown': '#3C787E',
            'brown': '#D56F3E',
            'black': '#030301',
            'darkblue': '#242F40',
            'white': '#D5DCF9',
            'whit': '#ECF8F2',
            'orange': '#FF3C38',
            'yellow': '#CCA43B',
            'pink': '#A01A7D',},
        extend: {},
    },
    plugins: [],
}
