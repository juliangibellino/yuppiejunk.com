'use strict';

var $ = require('jquery'),
    _ = require('lodash');

module.exports = ['$scope', '$window', function($scope, $window) {

    /**
     * @name hasBackground
     * @eventOf yuppie-junk.controller:yuppieJunkCtrl
     * @description
     * Stores the state of the header background
     */
    $scope.hasBackground = $window.location.pathname !== '/';

    console.log('$window.location.pathname: ', $window.location.pathname);

    $scope.isMenuActive = false;

    $scope.toggleMenu = function(){
        $scope.isMenuActive = !$scope.isMenuActive;
    };


}];