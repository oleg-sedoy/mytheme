/**
 *
 * Gulpfile setting
 * Autor: Olegmes50
 * URL: https://www.facebook.com/oleg.mes.50
 *
*/

/*
 * Project configuration
 */
	const
		proxy ={
			name: 'mytheme/'
		},
	  dir = {
	    assets: 'assets/',
	    sass: 'assets/sass/**/*.sass',
	    img: 'assets/img/**/*.*',
	    fonts: 'assets/fonts/**/*.woff'
	  },
	  watch = {
	  	sass: 'assets/sass/**/*.sass',
	  	js: 'assets/js/main.js',
	  	php: '**/*.php',
	  	img: 'assets/img/**/*.*'
	  }

/*
 * Include gulp plugins
 */
 var gulp            = require('gulp'),
 concat              = require('gulp-concat'),
 uglify          		 = require('gulp-uglify'),
 browserSync     		 = require('browser-sync'),
 sass            		 = require('gulp-sass'),
 autoprefixer    		 = require('gulp-autoprefixer'),
 jimp            		 = require("gulp-jimp-resize"),
 imagemin        		 = require('gulp-imagemin'),
 imageminMozjpeg 		 = require('imagemin-mozjpeg'),
 rename          		 = require("gulp-rename"),
 cssnano         		 = require('gulp-cssnano'),
 sourcemaps      		 = require('gulp-sourcemaps'),
 cache           		 = require('gulp-cache');

/*
 * Create script
 */	
gulp.task('scripts', function() {
	return gulp.src([
		dir.assets + '/js/main.js'
		])
	.pipe(sourcemaps.init())
	.pipe(concat('scripts.min.js'))
	.pipe(uglify())
	.pipe(gulp.dest(''))
	.pipe(sourcemaps.write('souremaps/'))
	.pipe(browserSync.reload({stream: true}));
});

/* 
 * Setting browser-syns
 */
gulp.task('browser-sync', function() {
    browserSync.init({
    		files: ['./**/*.php'],
        proxy: proxy.name
    });
});

/*
 * Create sass to css
 */
gulp.task('sass', function() {
	return gulp.src(dir.sass)
	.pipe(sourcemaps.init())
	.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
	.pipe(autoprefixer(['last 15 versions']))
	.pipe(cssnano({}))
	.pipe(sourcemaps.write('souremaps/'))
	.pipe(gulp.dest(''))
	.pipe(browserSync.reload({stream: true}));
});

/*
 * Setting imageresize
 */
 gulp.task('images', function() {
 	return gulp.src(dir.img)
 	.pipe(jimp({
 		sizes: [
 		{"suffix": "960", "width": 960},
 		{"suffix": "768", "width": 768},
 		{"suffix": "480", "width": 480},
 		{"suffix": "320", "width": 320}
 		]
 	}))
 	.pipe(imagemin([
 		 imageminMozjpeg({
 			progressive: true
 		})
 		], 	{	
 			interlaced: true,
 			progressive: true,
 			optimizationLevel: 5
 		}))
 	.pipe(gulp.dest('img/'));
 });

/*
 * Copy fonts to folder themes
 */
gulp.task('copyfonts', function() {
	var buildFonts = gulp.src(dir.fonts)
	.pipe(gulp.dest('fonts/'));
});

/*
 * Watch setting
 */
gulp.task('watch', ['sass','scripts','images','browser-sync'], function() {
	gulp.watch(watch.sass, ['sass']);
	gulp.watch(watch.js, ['scripts']);
	gulp.watch(watch.img, ['images']);
	gulp.watch(watch.php, browserSync.reload);
});

gulp.task('default', ['watch', 'copyfonts']);
