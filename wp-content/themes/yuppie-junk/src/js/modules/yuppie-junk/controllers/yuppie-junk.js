'use strict';

var $ = require('jquery');

module.exports = ['$scope', '$location', '$anchorScroll', function($scope, $location, $anchorScroll) {

    /**
     * @name $locationChangeStart
     * @eventOf yuppie-junk.controller:yuppieJunkCtrl
     * @description
     * Subscribes to the event $locationChangeStart and when published scrolls to
     * the correct anchor element
     */
    $scope.$on('$locationChangeStart', function(){
        $anchorScroll();
    });

}];