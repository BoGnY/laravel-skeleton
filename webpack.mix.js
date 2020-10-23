const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// Javascript
// noinspection JSUnresolvedFunction
mix.js('resources/js/app.js', 'public/js')
    .sourceMaps();

// Css
// noinspection JSUnresolvedFunction
mix.sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/font.scss', 'public/css')
    .options({
        autoprefixer: {
            options: {
                browsers: [
                    'IE >= 8, last 5 versions',
                ]
            }
        }
    })
    .sourceMaps();

if (mix.inProduction()) {
    // noinspection JSUnresolvedFunction
    mix.version();
}
