'use strict';

//
require('angular');

var app = angular.module('yuppie-junk', []);

app.config(require('./config/yuppie-junk.config.js'));
app.controller('yuppieJunkCtrl', require('./controllers/yuppie-junk.js'));
