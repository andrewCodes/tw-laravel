const { options, postCss } = require("laravel-mix");
const mix = require("laravel-mix");

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

mix.js("resources/js/app.js", "public/js")
    .sass("resources/sass/app.scss", "public/css") // take from app.scss and send to public.css (i.e. public/css/app.css)
    .options({
        processCssUrls: false,
        postCss: [require("tailwindcss")],
    })
    .browserSync({ // automatically updates in browser as we change blade files
        proxy: process.env.MIX_APP_HOST, // for valet
        host: process.env.MIX_APP_HOST, // for valet
        open: "external", // for valet
        watchOptions: {
            ignored: /node_modules/,
        },
    });

// for php artisan serve

// .browserSync('127.0.0.1:8000');

//or if want to ignore node modules...

// browserSync({
// proxy: '127.0.0.1:8000',
// watchOptions: {
//     ignored: /node_modules/,
// },
// });
