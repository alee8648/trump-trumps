var gulp = require('gulp');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var sourcemaps = require('gulp-sourcemaps');
var replace = require('gulp-replace');
var rename = require('gulp-rename');
var autoprefixer = require('gulp-autoprefixer');

// Generate main CSS
gulp.task('sass:main', function () { 
  return gulp.src('./scss/main.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('./dist/'))
  ;
});

// Generate dev JS
gulp.task('script', function () {
  return gulp.src('./js/scripts.js')
    .pipe(concat('scripts.js'))
    .pipe(gulp.dest('./dist/'));
});

// Generate uglified JS
gulp.task('script:release', function () {
  return gulp.src('./js/scripts.js')
    .pipe(concat('scripts.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./dist/'));
});

// Watch for file changes
gulp.task('start', function () {
  gulp.watch('./scss/*.scss', ['sass:main']);
  gulp.watch('./js/*.js', [ 'script' ]);
});

// Default, run 'gulp'
gulp.task('default', ['sass:main', 'script', 'start']);

// Minify for production, run 'gulp prod'
gulp.task('prod', ['sass:main', 'script:release']);
