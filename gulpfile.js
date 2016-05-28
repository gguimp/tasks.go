process.env.DISABLE_NOTIFIER = true;

var gulp = require('gulp');
var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor publicources.
 |
 */

elixir(function(mix) {
    mix.sass('app.scss');
});

elixir(function(mix) {
	// JQuery
	mix.copy("vendor/bower/jquery/dist/jquery.min.js", "resources/assets/js");

	// Bootstrap
	mix.copy("vendor/bower/bootstrap/less/**", "resources/assets/less/bootstrap");
	mix.copy("vendor/bower/bootstrap/dist/js/bootstrap.min.js", "resources/assets/js");
	mix.copy("vendor/bower/bootstrap/dist/fonts/**", "public/fonts");

	mix.scripts([
		'jquery.min.js',
		'bootstrap.min.js'
		],
		'public/js/tasks.go.js'
	);

    mix.less('tasks.go.less');
});