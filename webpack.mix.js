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

mix.setPublicPath('public');

mix.js('resources/js/admin/main.js', 'public/js/admin/main.js')
    .sass('resources/sass/admin/main.scss', 'public/css/admin/main.css')
    .copy('resources/images/', 'public/images')
    .copy('resources/icons/', 'public/icons')

mix.copyDirectory('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/css/webfonts');
