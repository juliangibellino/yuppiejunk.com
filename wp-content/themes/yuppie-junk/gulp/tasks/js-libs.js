'use strict';

var gulp = require('gulp'),
    del = require('del');

gulp.task('clean', function(cb) {
    del([config.paths.build + '/libs'], cb)
});

module.exports = gulp.task('js-libs', ['clean'], function() {
    var from = config.paths.src.scripts + '/libs/**/*',
        to = config.paths.build.scripts;

    return gulp.src([from], {
        base: 'src/js'
    })
        .pipe(gulp.dest(to));
});