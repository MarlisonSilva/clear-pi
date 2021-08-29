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

<<<<<<< HEAD
mix
    .sass('resources/views/scss/style.scss','public/site/style.css')
    .scripts('node_modules/jquery/dist/jquery.js', 'public/site/jquery.js')
    .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js','public/site/bootstrap.js')
;
=======
mix 
    .scripts('node_modules/jquery/dist/jquery.min.js', 'public/assets/js/jquery.min.js')
    .scripts('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/assets/js/bootstrap.js')
    .sass('resources/views/scss/style.scss', 'public/assets/css/style.css');
>>>>>>> 2cdad1de713dac8d128df9ae2e927829690b7536
