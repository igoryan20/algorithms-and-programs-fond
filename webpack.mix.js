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

mix.js('resources/js/app.js', 'public/js').sourceMaps()
    .js('resources/js/chart.js', 'public/js')
    .js('resources/js/upload-photo.js', 'public/js')
    .js('resources/js/selectpicker.js', 'public/js')
    .js('resources/js/validate-form.js', 'public/js')
    .js('resources/js/validate-release-form.js', 'public/js')
    .autoload({
        jquery: ['$', 'window.jQuery', 'jQuery']
    })
    .sass('resources/sass/app.scss', 'public/css')

module.exports = {
    watchOptions: {
        ignored: /node_modules/
    }
};