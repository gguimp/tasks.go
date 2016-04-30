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

gulp.task("assets.copy", function() {

	gulp.src("vendor/bower/jquery/dist/jquery.js")
		.pipe(gulp.dest("resources/assets/js"));

	gulp.src("vendor/bower/bootstrap/less/**")
		.pipe(gulp.dest("resources/assets/less/bootstrap"));

	gulp.src("vendor/bower/bootstrap/dist/js/bootstrap.js")
		.pipe(gulp.dest("resources/assets/js"));

	gulp.src("vendor/bower/bootstrap/dist/fonts/**")
		.pipe(gulp.dest("public/fonts"));
});

elixir(function(mix) {
	mix.scripts([
		'js/jquery.js',
		'js/bootstrap.js'
		],
		'public/js/tasks.go.js',
		'resources/assets'
	);

    mix.less('tasks.go.less');
});

gulp.task('default', ['assets.copy', 'less', 'scripts']);