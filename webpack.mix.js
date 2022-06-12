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
    .css('modules/Core/Resources/assets/tabler.io/css/tabler.css', 'css/tabler.css')
    .css('modules/Core/Resources/assets/tabler.io/css/tabler-flags.css', 'css/tabler-flags.css')
    .css('modules/Core/Resources/assets/tabler.io/css/tabler-payments.css', 'css/tabler-payments.css')
    .css('modules/Core/Resources/assets/tabler.io/css/tabler-vendors.css', 'css/tabler-vendors.css')
    .css('modules/Core/Resources/assets/tabler.io/css/demo.css', 'css/demo.css')
    .js('modules/Core/Resources/assets/tabler.io/libs/apexcharts/dist/apexcharts.min.js', 'libs/apexcharts/dist/apexcharts.min.js')
    .js('modules/Core/Resources/assets/tabler.io/libs/jsvectormap/dist/js/jsvectormap.min.js', 'libs/jsvectormap/dist/js/jsvectormap.min.js')
    .js('modules/Core/Resources/assets/tabler.io/libs/jsvectormap/dist/maps/world.js', 'libs/jsvectormap/dist/maps/world.js')
    .js('modules/Core/Resources/assets/tabler.io/libs/jsvectormap/dist/maps/world-merc.js', 'libs/jsvectormap/dist/maps/world-merc.js')
    .js('modules/Core/Resources/assets/tabler.io/js/tabler.js', 'js/tabler.js')
    .js('modules/Core/Resources/assets/tabler.io/js/demo.js', 'js/demo.js')
