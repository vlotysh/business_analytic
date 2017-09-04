const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');
require('laravel-elixir-eslint');

elixir.config.sourcemaps = false;

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
  mix
    .sass('app.scss')
    .webpack('app.js')
    .copy(['node_modules/font-awesome/fonts', 'node_modules/bootstrap/dist/fonts'], 'public/fonts');
});
