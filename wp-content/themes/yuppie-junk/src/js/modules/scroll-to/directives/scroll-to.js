'use strict';

/**
 * @name scroll-to.directive:scrollTo
 * @description Directive to provide functionality to scroll to an element
 */
module.exports = [function() {

    var $ = require('jquery');

    return {
        restrict: 'AE',
        scope: {
            id : '@id',
            media : '@'
        },
        link: function(scope, element, attrs){

            var _idToScroll = attrs.href;

            element.on('click', function(e) {
                var $target;

                if (_idToScroll) {
                    $target = $(_idToScroll);
                } else {
                    $target = element;
                }
                $('html, body').animate({scrollTop: $target.offset().top}, 'slow');
            });

        }

    };

}];