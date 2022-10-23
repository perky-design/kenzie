const gulp = require('gulp'),
	clean = require('gulp-clean'),
	postcss = require('gulp-postcss'),
	concatCss = require('gulp-concat-css-safe'),
	rename = require('gulp-rename');

gulp.task('watch', function () {
	gulp.watch(['assets/css/src/**/*.css']).on(
		'change',
		gulp.series(
			'clean-shared',
			'clean-blocks',
			'minify-shared',
			'minify-blocks'
		)
	);
});

gulp.task('clean-shared', function () {
	return gulp.src('assets/css/min/style-shared.min.css', {
			read: false,
			allowEmpty: true,
		})
		.pipe(clean());
});

gulp.task('clean-blocks', function () {
	return gulp.src('assets/css/min/blocks/*.min.css', {
			read: false,
			allowEmpty: true,
		})
		.pipe(clean());
});

gulp.task('minify-shared', function () {
	return gulp.src('assets/css/src/*.css')
		.pipe(concatCss("style-shared.min.css"))
		.pipe(postcss('style-shared.min.css'))
		.pipe(gulp.dest('assets/css/min/'));
});

gulp.task('minify-blocks', function () {
	return gulp.src('assets/css/src/blocks/*.css')
		.pipe(postcss())
		.pipe(rename({ suffix: '.min' }))
		.pipe(gulp.dest('assets/css/min/blocks/'));
});

gulp.task(
	'default',
	gulp.series(
		'clean-shared',
		'clean-blocks',
		'minify-shared',
		'minify-blocks'
	)
);
