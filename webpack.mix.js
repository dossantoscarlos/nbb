const { mix } = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .js('resources/assets/js/holder.min.js', 'public/js')
   .js('resources/assets/js/todosContados.js', 'public/js/contados.js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/nbb_signin.scss', 'public/css')
   .sass('resources/assets/sass/master.scss', 'public/css')
   .sass('resources/assets/sass/dashboard.scss', 'public/css')
   .sass('resources/assets/sass/nbb.scss', 'public/css');
