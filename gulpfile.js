var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var responsive = require('gulp-responsive');

// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function() {
        gulp.src('./src/scss/main.scss')
        .pipe(sass())
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('./build'))
});

// Copy html to build file
gulp.task('copy-php', function() {
    gulp.src('./src/pages/*.php')
    // Perform minification tasks, etc here
    .pipe(gulp.dest('./build'))
});

// Copy js to build file
gulp.task('copy-js', function() {
    gulp.src('./src/js/**/*.js')
    // Perform minification tasks, etc here
    .pipe(gulp.dest('./build/js'))
});

// Copy html to build file
gulp.task('copy-php__partial', function() {
    gulp.src('./src/partial/*.php')
    // Perform minification tasks, etc here
    .pipe(gulp.dest('./build/partial'))
});

// gulp
// Running gulp default will allow any changes to the src files to compile to the build folder and refresh the browser. Click Control + C in terminal to close
gulp.task('default', function(){
  gulp.watch("./src/scss/**/*.scss", ['sass']);
  gulp.watch("./src/pages/*.php", ['copy-php']);
  gulp.watch("./src/partial/*.php", ['copy-php__partial']);
  gulp.watch("./src/js/*.js", ['copy-js']);
});