var gulp           = require('gulp');
var less           = require('gulp-less');
var autoprefixer   = require('gulp-autoprefixer');
var browserSync    = require('browser-sync');
var fileinclude    = require('gulp-file-include')

function watch(){
    browserSync.init({
        server: {
            baseDir: './dist/'
        },
    });

    gulp.watch('app/less/**/*.less', styles)
    gulp.watch('app/html/**/*.html', html)
}

function styles() {
    return gulp.src('app/less/**/*.less')
        .pipe(less())
        .pipe(autoprefixer())
        .pipe(gulp.dest('dist/css'))
        .pipe(browserSync.stream())
}

function html(){
    return gulp.src('app/html/index.html')
        .pipe(fileinclude({
            prefix: '@@'
        }))
        .pipe(gulp.dest('dist/'))
        .pipe(browserSync.stream())
}

gulp.task('styles', styles);
gulp.task('default', watch);
gulp.task('html', html);




