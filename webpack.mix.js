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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/tabler.js', 'public/js')
    .js('resources/js/tabler.esm.js', 'public/js')
    .js('resources/js/demo.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [])
    .sass('resources/scss/tabler.scss', 'public/css')
    .sass('resources/scss/tabler-vendors.scss', 'public/css')
    .sass('resources/scss/tabler-payments.scss', 'public/css')
    .sass('resources/scss/tabler-flags.scss', 'public/css')
    .sass('resources/scss/demo.scss', 'public/css')
