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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
// // general resources
// let public_js = 'public/js/';
// let public_css = 'public/css/';
// let resource_sass = 'resources/assets/sass/';
// // Gentelella resources
// let gentelella_home = 'node_modules/gentelella/';
// let gentelella_vendor = gentelella_home + '/vendors/';
// mix.js('resources/assets/js/app.js', public_js).
// sass(resource_sass + 'app.scss', public_css).
// sass(resource_sass + 'home.scss', public_css).
// options({ processCssUrls: false }).
// sass(resource_sass + 'login.scss', public_css).
// options({ processCssUrls: false }).
// sass(resource_sass + 'dashboard.scss', public_css).
// options({ processCssUrls: false });
// /*
//  *  Copy dependent JavaScripts and CSSs
//  */
// mix.
//     // gentelella
// copy(gentelella_home + 'build/css/custom.css',
//     public_css + 'gentelella-custom.css').
// copy(gentelella_home + 'build/js/custom.js',
//     public_js + 'gentelella-custom.js')