var gulp = require('gulp');
var less = require('gulp-less');
var minimize = require('gulp-minify-css');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');

var paths = {
  scripts: ['assets/scripts/*'],
  less: ['assets/less/*']
};

gulp.task('less', function() {
	return gulp.src(paths['less'])
		.pipe(less({ style: 'compressed' }))
		.pipe(concat('app.css'))
		.pipe(minimize())
		.pipe(gulp.dest('public_html/css'));
});

gulp.task('js', function() {
	return gulp.src(paths['scripts'])
		.pipe(concat('script.js'))
		.pipe(uglify())
		.pipe(gulp.dest('public_html/js'));
});
