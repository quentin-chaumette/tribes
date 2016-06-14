/* Configuration */
var path = {
	css: "assets/css/",
	scss: "assets/sass/",
	js: "assets/js/"
}

/* Require */
var gulp = require('gulp');
var $ = require('gulp-load-plugins')();
var browserSync = require('browser-sync');
var reload = browserSync.reload;
// var browserify = require('browserify');
var source = require('vinyl-source-stream');

gulp.task('sass', function () {
	gulp.src(path.scss + '*.scss')
		.pipe($.sass({
			onError: console.error.bind(console, 'SASS error')
		}))
		.pipe($.autoprefixer({
			browsers: ['> 1%', 'last 2 versions', 'Firefox ESR', 'Opera 12.1']
		}))
		.pipe(gulp.dest(path.css))
		.pipe(reload({
			stream: true
		}));
});

gulp.task('browser-sync', function () {
	browserSync({
		proxy: "localhost/tribes"
	});
});
/*
gulp.task('browserify', function () {
	return browserify('./app/main.js')
		.bundle()
		.pipe(source('bundle.js'))
		.pipe(gulp.dest(path.js));
});
*/

/* Tasks */
gulp.task('default', ['sass', 'browser-sync'], function () {
	gulp.watch(path.scss + '**/*.scss', ['sass']);

	//gulp.watch("app/**/*.js", ['browserify']);
	//gulp.watch("app/templates/**/*.hbs", ['browserify']);
	//gulp.watch("app/views/**/*.html").on('change', reload);
	gulp.watch("./*.html").on('change', reload);
	//gulp.watch("js/*.js").on('change', reload);
	//gulp.watch("app/**/*.hbs").on('change', reload);

});
