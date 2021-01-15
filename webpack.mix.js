const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app/main.js', 'public/js/app.js')
   .js('resources/js/app/home.js', 'public/js/home.js')
   .sass('resources/sass/app/main.scss', 'public/css/app.css')
   .sass('resources/sass/app/home.scss', 'public/css/home.css')
   .js('resources/js/admin/main.js', 'public/js/admin.js')
   .sass('resources/sass/admin/main.scss', 'public/css/admin.css')
   .postCss('resources/sass/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer')
    ]);


if (mix.inProduction()) {
    mix.version();
}
