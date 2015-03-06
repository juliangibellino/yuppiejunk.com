'use strict';

var gulp = require('gulp');

module.exports = gulp.task('build', [
    'sass',
    'js',
    'lint',
    'fonts'
]);