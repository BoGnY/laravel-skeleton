const mix = require('laravel-mix');
const fs = require('fs');
const path = require('path');

require("laravel-mix-tailwind");

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
    .sourceMaps(false);

// Css
// noinspection JSUnresolvedFunction
mix.sass('resources/sass/app.scss', 'public/css')
    //.sass('resources/sass/font.scss', 'public/css')
    .options({
        //processCssUrls: false,
        postCss: [
            require('postcss-single-charset')({ /* options */ }),
            //tailwindcss('./tailwind.config.js')
        ],
        terser: {
            terserOptions: {
                format: {
                    comments: false,
                },
            },
            parallel: 4,
            extractComments: false,
        },
        cssNano: {
            preset: ['default', {
                discardComments: {
                    removeAll: true
                },
            }]
        }
    })
    .webpackConfig(require('./webpack.config'))
    .tailwind('./tailwind.config.js')
    .sourceMaps(false);

if (mix.inProduction()) {
    const dirs = ['public/js', 'public/css'];
    dirs.forEach(dir => {
        fs.readdirSync(dir).forEach(item => {
            // get current file name
            const name = path.parse(item).name;
            // get current file extension
            const ext = path.parse(item).ext;
            // get current file path
            const filepath = path.resolve(dir, item);
            // get information about the file
            const item_info = fs.statSync(filepath);

            // exclude folders
            if (item_info.isFile() && ! name.includes('.min') && ('.js' === ext || '.css' === ext)) {
                // noinspection JSUnresolvedFunction
                mix.minify(filepath);
            }
        })
    });

    // noinspection JSUnresolvedFunction
    mix.version();
}
