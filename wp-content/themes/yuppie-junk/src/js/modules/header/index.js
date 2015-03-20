'use strict';

//
require('angular');

var app = angular.module('header', []);

app.controller('headerCtrl', require('./controllers/header.js'));
