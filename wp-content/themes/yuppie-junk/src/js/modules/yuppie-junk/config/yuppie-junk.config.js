'use strict';

module.exports = function($provide, $locationProvider) {

    /**
     * Disabled HTML5 location routes and set has prefix to '!'
     */
    $locationProvider.html5Mode(false).hashPrefix('!');

};