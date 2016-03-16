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

var adminlte = "vendor/bower/components/AdminLTE/";
var public = "public/assets/";

gulp.task("copyfiles", function() {

	// BOOTSTRAP
	gulp.src(adminlte + "bootstrap/css/bootstrap.min.css")
		.pipe(gulp.dest(public + "css/"));

	gulp.src(adminlte + "bootstrap/fonts/**")
		.pipe(gulp.dest(public + "fonts/"));

	gulp.src(adminlte + "bootstrap/js/bootstrap.min.js")
		.pipe(gulp.dest(public + "js/"));

	// AdminLTe
	gulp.src(adminlte + "dist/css/AdminLTE.min.css")
		.pipe(gulp.dest(public + "css/"));

	gulp.src(adminlte + "dist/css/skins/skin-blue.min.css")
		.pipe(gulp.dest(public + "css/"));

	gulp.src(adminlte + "dist/img/**")
		.pipe(gulp.dest(public + "img/"));

	gulp.src(adminlte + "dist/js/app.min.js")
		.pipe(gulp.dest(public + "js/"));

	// JQuery
	gulp.src(adminlte + "plugins/jQuery/jQuery-2.1.4.min.js")
		.pipe(gulp.dest(public + "js/"));
});
