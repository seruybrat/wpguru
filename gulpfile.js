//NPM-MODULES
//--------------------------------------------------
var gulp = require('gulp');
var plumber = require('gulp-plumber');
var browserSync = require('browser-sync');
var imagemin = require('gulp-imagemin');
var less = require('gulp-less');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
/*var hash = require('gulp-hash');*/
// var spritesmith = require('gulp.spritesmith');

// hash
/*var options = {
    hashLength: 4,
    template: '<%= name %>.<%= hash %><%= ext %>'
};*/

//gulp.src('.**/*.*')
//  .pipe(hash(options))
//  .pipe(gulp.dest('./'));
//end hash

gulp.task('sprite', function() {
    var spriteData = 
        gulp.src('./images/writers/*.*') // путь, откуда берем картинки для спрайта
            .pipe(
            	spritesmith({
	                imgName: 'sprite.jpg',
	                cssName: 'sprite.css'
            	})
            );
    spriteData.img.pipe(gulp.dest('./images/')); // путь, куда сохраняем картинку
    spriteData.css.pipe(gulp.dest('./css/')); // путь, куда сохраняем стили
});

//TASK: gulp
//--------------------------------------------------
gulp.task('default', ['browser-sync', 'watch']);

//TASK: gulp watch
//--------------------------------------------------
gulp.task('watch', function() {
	gulp.watch('./less/**/*.less', ['less']);
});

//TASK: gulp img
//--------------------------------------------------
gulp.task('img', function() {
	gulp.src(['./{images,css}/**/*.{png,jpg,jpeg,gif,svg}', './screenshot.png'])
	.pipe(plumber())
	.pipe(imagemin({progressive: true}))
	.pipe(gulp.dest("./"));
});

//TASK: gulp less
//--------------------------------------------------
gulp.task('less', function () {
	gulp.src('./less/style.less')
	.pipe(plumber())
	.pipe(sourcemaps.init())
	.pipe(less())
	.pipe(autoprefixer({browsers: ['last 50 versions']}))
	.pipe(sourcemaps.write('./'))
	.pipe(gulp.dest('./'))
});

var domain = 'gurudissertation.com.local';

//TASK: gulp browser-sync
//--------------------------------------------------
//http://www.browsersync.io/docs/options/
gulp.task('browser-sync', function() {
	//watch files
	var files = [
		'./**/*.css',
		'./**/*.less',
		'./js/**/*.js',
		'./**/*.php'
	];

	//initialize browsersync
	browserSync.init(files, {
		proxy: domain,
		//port: 8080, //default: 3000
		//tunnel: true, //tunnel the browsersync server through a random Public URL
		//tunnel: "olgax", //attempt to use the custom URL: "http://olgax.localtunnel.me"
		injectChanges: true, //inject CSS changes
		notify: true
	});
});
