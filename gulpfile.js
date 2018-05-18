var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();
var autoprefixer = require('gulp-autoprefixer');
var cssmin = require('gulp-cssmin');
var mmq = require('gulp-merge-media-queries')
var gulpSequence = require('gulp-sequence');
var concat = require('gulp-concat');


// Static Server + watching scss/html files through BrowserSync
gulp.task('default', function() {

    //specify which folder should be synced to the browser
    browserSync.init({
        base: "./build",
        port: "8888",
        proxy: "http://localhost:8888",
        browser: ["google chrome"]
    });

    //watch for changes in scss and html folders, and compile if changed
    gulp.watch("./src/scss/**/*.scss", ['sass']);
    gulp.watch(["./src/php/pages/*.php"], ['php']);
    gulp.watch(["./src/php/partial/*.php"], ['php-partials']);
    gulp.watch("./src/js/*.js", ['scripts']);
});

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
        gulp.src('./src/scss/style.scss')
        .pipe(sass())
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(mmq({
            log: false
        }))
        .pipe(cssmin())
        .pipe(gulp.dest('./build'))
        .pipe(browserSync.stream());
});

// Copy pages to build file
gulp.task('php', function() {
    gulp.src(['./src/php/pages/*.php'])
    .pipe(gulp.dest('./build'))
    .pipe(browserSync.stream());
});

// Copy partial to build file
gulp.task('php-partials', function() {
    gulp.src(['./src/php/partial/*.php'])
    .pipe(gulp.dest('./build/partial'))
    .pipe(browserSync.stream());
});

// Copy js to build file
gulp.task('scripts', function() {
    //Order script files will appear
    gulp.src(['./src/js/slider.js', './src/js/current-year.js', './src/js/instagram.js', './src/js/scrollTo.js', './src/js/overlayNavigation.js'])
    .pipe(concat('scripts.js'))
    .pipe(gulp.dest('./build/'))
    .pipe(browserSync.stream());
});