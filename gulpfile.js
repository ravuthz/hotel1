var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

var assets = 'resources/assets/';

elixir.config.sourcemaps = false;

elixir(function(mix) {

    mix.copy('vendor/twbs/bootstrap/dist/css/bootstrap.min.css', assets + 'css/bootstrap.min.css');

    mix.copy('vendor/twbs/bootstrap/dist/css/bootstrap-theme.min.css', assets + 'css/bootstrap-theme.min.css');

    mix.copy('vendor/components/jquery/jquery.min.js', assets + 'js/jquery.min.js');

    mix.copy('vendor/twbs/bootstrap/dist/js/bootstrap.min.js', assets + 'js/bootstrap.min.js');

    mix.sass('app.scss', assets + 'css/custome.css');

    mix.styles([
        'bootstrap.min.css',
        'bootstrap-theme.min.css',
        'custome.css'
    ], 'public/dash/style.css');

    mix.scripts([
        'jquery.min.js',
        'bootstrap.min.js',
    ], 'public/dash/script.js');
});
