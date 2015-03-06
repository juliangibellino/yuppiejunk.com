var gulp = require('gulp'),
    watch = require('gulp-watch');

require('./sass.js');

gulp.task('watch', function () {
    return gulp.watch([config.paths.src.styles + '/**/*.scss'], ['sass']);
});