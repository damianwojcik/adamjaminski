const gulp = require('gulp');
const browserSync = require('browser-sync');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const rename = require('gulp-rename');
const purge = require('gulp-css-purge');
const uglify = require('gulp-uglify-es').default;
const plumber = require('gulp-plumber');
const concat = require('gulp-concat');

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
        .pipe(purge())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest('./'))
        .pipe(browserSync.reload({stream:true}))
});

gulp.task('default', ['browser-sync'], () => {
    gulp.watch("assets/css/**/*.+(scss|sass)", ['styles']);
    gulp.watch("assets/js/**/*.js", ['scripts']);
});