var gulp = require('gulp')
var plumber = require('gulp-plumber')
var postcss = require('gulp-postcss')
var autoprefixer = require('autoprefixer')
var sourcemaps = require('gulp-sourcemaps')
var groupmq = require('gulp-group-css-media-queries')
var sass = require('gulp-sass')
var header = require('gulp-header')
var cleanCSS = require('gulp-clean-css')
var rename = require('gulp-rename')
var uglify = require('gulp-uglify')
var pkg = require('./package.json')
var browserSync = require('browser-sync').create()

// Copy third party libraries from /node_modules into /vendor
gulp.task('vendor', function () {
  // Bootstrap
  gulp.src([
    './node_modules/bootstrap/dist/**/*',
    '!./node_modules/bootstrap/dist/css/bootstrap-grid*',
    '!./node_modules/bootstrap/dist/css/bootstrap-reboot*'
  ])
    .pipe(gulp.dest('./vendor/bootstrap'))
  // Font Awesome
  gulp.src([
    './node_modules/font-awesome/**/*',
    '!./node_modules/font-awesome/{less,less/*}',
    '!./node_modules/font-awesome/{scss,scss/*}',
    '!./node_modules/font-awesome/.*',
    '!./node_modules/font-awesome/*.{txt,json,md}'
  ])
    .pipe(gulp.dest('./vendor/font-awesome'))
  // jQuery Easing
  gulp.src([
    './node_modules/jquery.easing/*.js'
  ])
    .pipe(gulp.dest('./vendor/jquery-easing'))
  // Magnific Popup
  gulp.src([
    './node_modules/magnific-popup/dist/*'
  ])
    .pipe(gulp.dest('./vendor/magnific-popup'))
  // Scrollreveal
  gulp.src([
    './node_modules/scrollreveal/dist/*.js'
  ])
    .pipe(gulp.dest('./vendor/scrollreveal'))
})

// Compile SCSS
gulp.task('css:compile', function () {
  return gulp.src('scss/style.scss')
    .pipe(sourcemaps.init())
    .pipe(plumber())
    .pipe(sass())
    .pipe(sourcemaps.write('./maps'))
    .pipe(gulp.dest('.'))
    .pipe(browserSync.reload({
      stream: true
    }))
})

// Minify CSS
gulp.task('css:minify', ['css:compile'], function () {
  return gulp.src([
    './style.css',
    '!*.min.css'
  ])
    .pipe(cleanCSS())
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest('.'))
    .pipe(browserSync.stream())
})

// CSS
gulp.task('css', ['css:compile', 'css:minify'])

// Minify JavaScript
gulp.task('js:minify', function () {
  return gulp.src([
    './js/*.js',
    '!./js/*.min.js'
  ])
    .pipe(uglify())
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest('./js'))
    .pipe(browserSync.stream())
})

// JS
gulp.task('js', ['js:minify'])

// Default task
gulp.task('default', ['css', 'js', 'vendor'])

// Browser Sync
gulp.task('browserSync', function () {
  browserSync.init({
    proxy: 'http://amica-lando.lndo.site',
  })
})

// Dev task
gulp.task('dev', ['css', 'js', 'browserSync'], function () {
  gulp.watch('./scss/**/*.scss', ['css'])
  gulp.watch('./js/*.js', ['js'])
  gulp.watch('./*.php', browserSync.reload)
})
