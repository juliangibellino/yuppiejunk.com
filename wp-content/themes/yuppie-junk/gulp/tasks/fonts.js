'use strict';

var gulp = require('gulp'),
    del = require('del');

gulp.task('clean', function(cb) {
    del([config.paths.build.fonts], cb)
});

module.exports = gulp.task('fonts', ['clean'], function() {
    var from = config.paths.src.fonts + '/**/*',
        to = config.paths.build.fonts;

    return gulp.src([from], {
        base: 'src/fonts'
    })
        .pipe(gulp.dest(to));
});