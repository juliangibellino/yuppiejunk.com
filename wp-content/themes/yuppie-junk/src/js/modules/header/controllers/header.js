'use strict';

var $ = require('jquery'),
    _ = require('lodash');

module.exports = ['$scope', '$window', function($scope, $window) {

    var _window = angular.element($window);

    var _heroElement = angular.element('#home');

    /**
     * @name hasBackground
     * @eventOf yuppie-junk.controller:yuppieJunkCtrl
     * @description
     * Stores the state of the header background
     */
    /*$scope.hasBackground = false;

    function _init(){
        _bindWindowScroll();
    }

    function _bindWindowScroll(){
        _window.on('scroll', _.debounce(_checkScrollPosition, 100));
    }

    function _checkScrollPosition(){
        var heroHeight = _heroElement.height(),
            scrollPosition = _window.scrollTop();

        if(scrollPosition > heroHeight && !$scope.hasBackground){
            $scope.$apply( function(){
                $scope.hasBackground = true;
            });
        } else if(scrollPosition < heroHeight && $scope.hasBackground){
            $scope.$apply( function(){
                $scope.hasBackground = false;
            });
        }
    }*/

    _init();

}];