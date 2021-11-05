const mix = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js')
    // .postCss('resources/css/app.css', 'public/css', [
    //     //
    // ])
    .vue()
    .sass('resources/assets/sass/app.scss', 'public/css');