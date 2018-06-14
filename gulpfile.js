const gulp = require('gulp');
const server = require('browser-sync').create();
const sass = require('gulp-sass');
const sourcemaps = require('gulp-sourcemaps');
const autoprefixer = require('gulp-autoprefixer');
const cleanCSS = require('gulp-clean-css');
const rename = require('gulp-rename');

const paths = {
    styles: {
        src: 'assets/css/**/*.+(scss|sass)',
        dest: './'
    }
}

function reload(done) {
    server.reload();
    done();
}

function styles() {
    return gulp.src(paths.styles.src)
        // .pipe(sourcemaps.init())
        .pipe(sass()).on('error', sass.logError)
        .pipe(autoprefixer({
            browsers: ['> 1%']
        }))
        .pipe(gulp.dest(paths.styles.dest))
        .pipe(cleanCSS({
            compatibility: 'ie8'
        }))
        // .pipe(sourcemaps.write())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest(paths.styles.dest))
        .pipe(server.stream())
}

function serve(done) {
    server.init({
        server: "./"
    })
    done();
    gulp.watch(paths.styles.src, styles)
    gulp.watch('*.html', reload)
}

gulp.task('default', serve)