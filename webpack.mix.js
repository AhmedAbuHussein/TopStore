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
    
mix.js('resources/js/app.js', 'public/js').vue()
.sass('resources/sass/app.scss', 'public/css');

mix.js('Modules/Admin/Resources/assets/js/app.js', 'js/admin.js')
    .sass('Modules/Admin/Resources/assets/sass/app.scss', 'css/admin.css');
