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

mix 
    .scripts('node_modules/jquery/dist/jquery.min.js', 'public/assets/js/jquery.min.js')
    .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/assets/js/bootstrap.js')
    .sass('resources/views/scss/style.scss', 'public/assets/css/style.css');
