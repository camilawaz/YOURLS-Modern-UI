var gulp = require('gulp'),
    sass = require('gulp-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    concat = require('gulp-concat'),
    rename = require('gulp-rename'),
    plumber = require('gulp-plumber'),
    uglify = require('gulp-uglify'),
    clean = require('gulp-clean'),
    sourcemaps = require('gulp-sourcemaps'),
    fileinclude = require('gulp-file-include'),
    sequence = require('gulp-sequence'),
    cleanCSS = require('gulp-clean-css');


// Development Tasks
gulp.task('includes', function() {
  return gulp.src('src/plugin.php')
    .pipe(fileinclude({
      prefix: '@@',
      basepath: 'src/files/css'
    }))
    .pipe(gulp.dest('modern-ui'))
});

var gulpPaths = {
  sass:'src/scss/',
  cssDist:'src/files/css/'
}

gulp.task('sass', function () {
  return gulp.src(gulpPaths.sass + '**/*.scss')
    .pipe(plumber({
      errorHandler: function (error) {
        console.log(error.message);
        this.emit('end');
    }}))
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer(['last 2 versions', 'ie 8', 'ie 9', 'ie 10', '> 1%']))
    .pipe(gulp.dest(gulpPaths.cssDist))
    .pipe(cleanCSS())
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest(gulpPaths.cssDist))
    .pipe(sourcemaps.write('.', {
      mapFile: function(mapFilePath) {
        return mapFilePath.replace('.css.map', '.map');
      }
    }))
    .pipe(gulp.dest(gulpPaths.cssDist))
});

// Clean HTML
// gulp.task('clean:html', function() {
//   return gulp.src('dev/*.html')
//     .pipe(clean());
// });


gulp.task('watch', ['includes', 'sass'], function(){
  gulp.watch('dev/files/scss/**/*.scss', ['sass']);
  gulp.watch('dev/files/**/*.html', ['includes']);
});

// Build Sequences
// ---------------
gulp.task('default', function(callback) {
  sequence(['includes', 'sass'], callback);

});
