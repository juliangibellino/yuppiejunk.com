'use strict';

var gulp = require('gulp'),
    fs = require('fs'),
    path = require('path'),
    compass = require('gulp-compass'),
    minifyCSS = require('gulp-minify-css');

module.exports = gulp.task('sass', function() {
    return gulp.src(config.paths.src.styles + '/*.scss')
        .pipe(compass({
            project: PROJECT_BASE,
            config_file: 'src/config.rb',
            css: 'library/css',
            sass: 'src/scss',
            sourcemap: true
        }))
        .on('error', function(error) {
            console.log(error);
            this.emit('end');
        })
        .pipe(minifyCSS())
        .pipe(gulp.dest(config.paths.build.styles + '/css'));
});

