'use strict';

var gulp = require('gulp'),
    jshint = require('gulp-jshint');

module.exports = gulp.task('lint', function() {
    var lintFiles = [
        config.paths.src.scripts + '/*js',
        config.paths.src.scripts + '/modules/*.js',
        '!' + config.paths.src.scripts + '/bundle.js'
    ];

    return gulp.src(lintFiles)
        .pipe(jshint())
        .pipe(jshint.reporter('default'));
});