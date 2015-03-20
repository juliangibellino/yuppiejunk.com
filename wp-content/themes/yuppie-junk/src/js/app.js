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
    'scroll-to',
    'podcast-playlist'
]);

