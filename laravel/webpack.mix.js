const mix = require('laravel-mix');

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

mix
    .styles('resources/views/admin/assets/css/vendor/jquery-jvectormap-1.2.2.css', 'public/backend/assets/css/vendor.css')
    .styles('resources/views/admin/assets/css/icons.min.css', 'public/backend/assets/css/icons.css')
    .styles('resources/views/admin/assets/css/app.min.css', 'public/backend/assets/css/app.css')
    .styles('resources/views/admin/assets/css/app-dark.min.css', 'public/backend/assets/css/app-dark.css')
    .scripts([
        'resources/views/admin/assets/js/vendor.min.js',
        'resources/views/admin/assets/js/app.min.js'
    ], 'public/backend/assets/js/app.js')
    .scripts([
        'resources/views/admin/assets/js/vendor/apexcharts.min.js',
        'resources/views/admin/assets/js/vendor/jquery-jvectormap-1.2.2.min.js',
        'resources/views/admin/assets/js/vendor/jquery-jvectormap-world-mill-en.js',
    ], 'public/backend/assets/js/vendor.js')
    .copyDirectory('resources/views/admin/assets/fonts', 'public/backend/assets/fonts')
    .copyDirectory('resources/views/admin/assets/images', 'public/backend/assets/images')








    .options({
        processCssUrls: false
    })

    .version();
