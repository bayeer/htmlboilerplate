var gulp = require('gulp'),
    sass = require('gulp-sass'),
    livereload = require('gulp-livereload');
 
gulp.task('sass', function() {
  return gulp.src('./sass/**/*.sass')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./css'))
    .pipe(livereload());
});

gulp.task('mainreload', function() {
	livereload.reload();
});

gulp.task('watch', function() {
  livereload.listen();
  gulp.watch('./**/*.sass', ['sass']);
  gulp.watch('./index.php', ['mainreload']);
});
 