'use strict';

//
require('angular');

var app = angular.module('scroll-to', []);

app.directive('scrollTo', require('./directives/scroll-to.js'));
