const mix = require("laravel-mix");
require('mix-env-file');

require("laravel-mix-tailwind");
require('laravel-mix-critical');

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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ])
    .critical({
        enabled: mix.inProduction(),
        urls: [
            { src: process.env.APP_URL, dest: 'public/css/critical.min.css' },
        ],
        options: {
            minify: true,
        },
    });

if (mix.inProduction()) {
    mix.version();
}
