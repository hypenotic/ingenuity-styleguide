// Pull in gulp plugins and assign to variables
var gulp    = require('gulp'),
  uglify    = require('gulp-uglifyjs'),
  plumber     = require('gulp-plumber'),
  sass    = require('gulp-ruby-sass'),
  imagemin  = require('gulp-imagemin'),
  pngquant  = require('imagemin-pngquant'),
  livereload  = require('gulp-livereload'),
  notify    = require('gulp-notify'),
  jshint    = require('gulp-jshint');
  autoprefixer = require('gulp-autoprefixer');

// Create custom variables to make life easier
var outputDir = 'dist';

var scriptList = [
  // 'src/components/modernizer/modernizr.js',
  // 'src/components/jquery/dist/jquery.js',
    'src/js/index.js',
];

var fontIcons = [
  'src/components/fontawesome/fonts/**.*', 
  'src/components/monosocialiconsfont/MonoSocialIconsFont*.*'
];

var sassOptions = {
  style: 'compressed'
};

// Create image minification task
gulp.task('imagemin', function () {
    return gulp.src(['src/images/*','src/images/**/*'])
      //.pipe(cache())
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        }))
        .pipe(gulp.dest(outputDir + '/images'))
        .pipe(notify("image task finished"));
});

// Create js scripts concat and minify task.
gulp.task('js', function() {
  return gulp.src(scriptList)
    .pipe(jshint('.jshintrc'))
      .pipe(jshint.reporter('default'))
    .pipe(plumber({errorHandler: notify.onError("Error: <%= error.message %>")}))
      .pipe(uglify('app.min.js', {outSourceMap: true}))
      .pipe(gulp.dest(outputDir + '/js'))
      .pipe(livereload())
      .pipe(notify("js task finished"));
});


// Create sass compile task
gulp.task('sass', function() {
    return sass('src/sass/style.scss', sassOptions) 
    .on('error', function (err) { console.error('Error!', err.message); })
    .pipe(autoprefixer())
    .pipe(gulp.dest(''))
    .pipe(livereload())
    .pipe(notify("sass task finished"));
}); 

// Create fonticons compile task
gulp.task('icons', function() { 
    return gulp.src(fontIcons) 
        .pipe(gulp.dest(outputDir + '/fonts')); 
});

// Create watch task
gulp.task('watch', function() {
  gulp.watch('src/js/**/*.js', ['js']);
  gulp.watch('src/sass/**/*.scss', ['sass']);
  gulp.watch('src/images/*', ['imagemin']);
  livereload.listen();
  gulp.watch('*.php').on('change', livereload.changed);
  gulp.watch('*.html').on('change', livereload.changed);
});

// Create default task so you can gulp whenever you don't want to watch
gulp.task('default', ['sass', 'js', 'imagemin', 'watch']);