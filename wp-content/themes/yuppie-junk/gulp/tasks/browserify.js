'use strict';

var gulp = require('gulp'),
    browserify = require('browserify'),
    shim = require('browserify-shim'),
    source = require('vinyl-source-stream'),
    streamify = require('gulp-streamify'),
    sourcemaps = require('gulp-sourcemaps'),
    uglify = require('gulp-uglify');

module.exports = gulp.task('browserify', function() {
    var bundler = browserify(config.paths.src.scripts + '/index.js');

    return bundler
        .bundle()
        .pipe(source('bundle.js'))

        .pipe(gulp.dest(config.paths.build.scripts));

    //.pipe(streamify(uglify()))
});

