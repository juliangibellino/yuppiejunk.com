'use strict';

//Dependencies
require('angular');
require('angular-sanitize');
require('angular-bootstrap');
require('angular-bootstrap-templates');

//Module dependencies
require('./modules');

// Create main module
angular.module('yp-app', [
    'ngSanitize',
    'ui.bootstrap',
    'yuppie-junk',
    'podcast-playlist',
    'scroll-to'
]);

//Set JW Player Key
//window.jwplayer.key="+kV0GeiZJZhgZPB9B4FeiNa+mTdllC1ff12UWw==";

