const gulp = require('gulp');
const browserSync = require('browser-sync');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');
const rename = require('gulp-rename');
const purge = require('gulp-css-purge');
const critical = require('critical').stream;
const workboxBuild = require('workbox-build');
const imagemin = require('gulp-imagemin');
const cache = require('gulp-cache');
const uglify = require('gulp-uglify-es').default;
const plumber = require('gulp-plumber');
const concat = require('gulp-concat');
const size = require('gulp-size');

const orderedScriptFiles = [
    'assets/js/jquery.magnific-popup.min.js',
    'assets/js/jquery.waypoints.min.js',
    'assets/js/jquery.counterup.min.js',
    'assets/js/swiper.min.js',
    'assets/js/blazy.min.js',
    'assets/js/main.js'
];

gulp.task('browser-sync', function() {
    browserSync({
      server: {
         baseDir: "./"
      }
    });
});
  
gulp.task('bs-reload', function () {
    browserSync.reload();
});

gulp.task('critical', function () {
    return gulp.src('src/*.html')
        .pipe(plumber({
            errorHandler: function (error) {
            console.log(error.message);
            this.emit('end');
        }}))
        .pipe(critical({
            base: 'dist/',
            inline: true,
            ignore: ['@font-face',/url\(/]
        }))
        .pipe(gulp.dest('dist'))
        .pipe(browserSync.reload({stream:true}))
});

gulp.task('scripts', function() {
    return gulp.src(orderedScriptFiles)
        .pipe(plumber({
            errorHandler: function (error) {
            console.log(error.message);
            this.emit('end');
        }}))
        .pipe(concat('main.js'))
        .pipe(rename({suffix: '.min'}))
        .pipe(uglify())
        .pipe(gulp.dest('./'))
        .pipe(browserSync.reload({stream:true}))
});

gulp.task('styles', function() {
    return gulp.src('assets/css/**/*.+(scss|sass)')
        .pipe(plumber({
            errorHandler: function (error) {
            console.log(error.message);
            this.emit('end');
        }}))
        .pipe(sass())
        .pipe(autoprefixer({
            browsers: ['last 2 versions']
        }))
        .pipe(gulp.dest('./'))
        .pipe(cleanCSS({
            compatibility: 'ie8'
        }))
        .pipe(purge())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest('./'))
        .pipe(browserSync.reload({stream:true}))
});

gulp.task('default', ['browser-sync'], () => {
    gulp.watch("assets/css/**/*.scss", ['styles']);
    gulp.watch("assets/js/**/*.js", ['scripts']);
});