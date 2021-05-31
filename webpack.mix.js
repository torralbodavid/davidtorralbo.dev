const mix = require("laravel-mix");

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
            { src: 'https://davidtorralbo.dev.test/', dest: 'public/css/index_critical.min.css' },
        ],
        options: {
            minify: true,
        },
    });

if (mix.inProduction()) {
    mix.version();
}
