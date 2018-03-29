let mix = require('laravel-mix');

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
    .scripts([
        'resources/metronic/assets/vendors/base/vendors.bundle.js',
        'resources/metronic/assets/demo/demo2/base/scripts.bundle.js',
        'resources/metronic/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js',
        'resources/metronic/assets/app/js/dashboard.js'
    ], 'public/js/metronic.js')
   .sass('resources/assets/sass/app.scss', 'public/css')
    .styles([
        'resources/metronic/assets/vendors/base/vendors.bundle.css',
        'resources/metronic/assets/demo/demo2/base/style.bundle.css'
    ], 'public/css/metronic.css')
    .copy('resources/metronic/assets/demo/demo2/media/img/logo/logo.png', 'public/images')
    .copy('resources/metronic/assets/app/media/img/blog/blog1.jpg', 'public/images')
    .copy('resources/metronic/assets/app/media/img/client-logos', 'public/images')
    .copy('resources/metronic/assets/app/media/img/users', 'public/images')
    .copyDirectory('resources/metronic/assets/vendors/base/fonts', 'public/css/fonts');
