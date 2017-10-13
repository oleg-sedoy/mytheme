/**
 *
 * Gulpfile setting
 * Autor: Olegmes50
 * URL: https://www.facebook.com/oleg.mes.50
 *
*/

/**
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

/**
 * browserliat
 */
const AUTOPREFIXER_BROWSERS = [
    'last 2 version',
    '> 1%',
    'ie >= 9',
    'ie_mob >= 10',
    'ff >= 30',
    'chrome >= 34',
    'safari >= 7',
    'opera >= 23',
    'ios >= 7',
    'android >= 4',
    'bb >= 10'
  ];

/**
 * Include gulp plugins
 */
 var gulp            = require('gulp'),
 concat              = require('gulp-concat'),
 uglify          		 = require('gulp-uglify'),
 browserSync     		 = require('browser-sync'),
 sass            		 = require('gulp-sass'),
 autoprefixer    		 = require('gulp-autoprefixer'),
 jimp            		 = require('gulp-jimp-resize'),
 imagemin        		 = require('gulp-imagemin'),
 imageminMozjpeg 		 = require('imagemin-mozjpeg'),
 rename          		 = require('gulp-rename'),
 cssnano         		 = require('gulp-cssnano'),
 sourcemaps      		 = require('gulp-sourcemaps'),
 plumber 						 = require('gulp-plumber'),
 notify 						 = require('gulp-notify'),
 cache           		 = require('gulp-cache');

/**
 * Plumber confiriration
 */
 var plumberErrorHandler = { errorHandler: notify.onError({
 	title: 'Gulp',
 	message: 'Error: <%= error.message %>'
 })
};

/**
 * Create script
 */	
gulp.task('scripts', function() {
	return gulp.src([
		dir.assets + '/js/main.js'
		])
	.pipe(plumber(plumberErrorHandler))
	.pipe(sourcemaps.init())
	.pipe(concat('scripts.min.js'))
	.pipe(uglify())
	.pipe(gulp.dest(''))
	.pipe(sourcemaps.write('souremaps/'))
	.pipe(browserSync.reload({stream: true}));
});

/** 
 * Setting browser-syns
 */
gulp.task('browser-sync', function() {
    browserSync.init({
    		files: ['./**/*.php'],
        proxy: proxy.name
    });
});

/**
 * Create sass to css
 */
gulp.task('sass', function() {
	return gulp.src(dir.sass)
	.pipe(plumber(plumberErrorHandler))
	.pipe(sourcemaps.init())
	.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
	.pipe( autoprefixer( AUTOPREFIXER_BROWSERS ) )
	.pipe(cssnano({}))
	.pipe(sourcemaps.write('souremaps/'))
	.pipe(gulp.dest(''))
	.pipe(browserSync.reload({stream: true}));
});

/**
 * Setting imageresize
 */
 gulp.task('images', function() {
 	return gulp.src(dir.img)
 	.pipe(plumber(plumberErrorHandler))
 	.pipe(jimp({
 		sizes: [
 		{"suffix": "1200", "width": 1200},
 		{"suffix": "992", "width": 992},
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

/**
 * Copy fonts to folder themes
 */
gulp.task('copyfonts', function() {
	var buildFonts = gulp.src(dir.fonts)
	.pipe(gulp.dest('fonts/'));
});

/**
 * Watch setting
 */
gulp.task('watch', ['sass','scripts','images','browser-sync'], function() {
	gulp.watch(watch.sass, ['sass']);
	gulp.watch(watch.js, ['scripts']);
	gulp.watch(watch.img, ['images']);
	gulp.watch(watch.php, browserSync.reload);
});

gulp.task('default', ['watch', 'copyfonts']);
