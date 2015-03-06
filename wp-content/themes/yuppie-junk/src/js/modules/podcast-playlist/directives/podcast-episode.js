'use strict';

/**
 * @name podcast-playlist.directive:podcastEpisode
 * @description Directive responsible for managing a podcast episode element
 */
module.exports = ['$rootScope', function($rootScope) {

    return {
        restrict: 'AE',
        scope: true,
        link: function(scope, element, attrs, controller){

            /**
             * @name number
             * @propertyOf podcast-playlist.directive:podcastEpisode
             * @description Stores the episodes number
             * @type {string}
             */
            scope.number = attrs.podcastEpisode;

            /**
             * @name title
             * @propertyOf podcast-playlist.directive:podcastEpisode
             * @description Stores the episodes title based on the DOM elements html
             * @type {string}
             */
            scope.title = element.find('.ypj-episode-title').html();

            /**
             * @name description
             * @propertyOf podcast-playlist.directive:podcastEpisode
             * @description Stores the episodes description based on the DOM elements html
             * @type {string}
             */
            scope.description = element.find('.yjp-episode-summary').html();

            /**
             * @name url
             * @propertyOf podcast-playlist.directive:podcastEpisode
             * @description Stores the episodes media url
             * @type {string}
             */
            scope.url = attrs.podcastUrl;

            /**
             * @name podcastTotal
             * @propertyOf podcast-playlist.directive:podcastEpisode
             * @description Stores the total number of episodes in a playlist
             * @type {string}
             */
            scope.podcastTotal = attrs.podcastTotal;


            scope.isActive = false;

            /**
             * @name _init
             * @methodOf podcast-playlist.directive:podcastEpisode
             * @description On initialization check if the podcast is the first in the playlist, and if true
             * broadcast the episode to play
             * @private
             */
            function _init(){
                if(scope.number === scope.podcastTotal){
                    scope.playEpisode();
                }
            }

            function _setEpisodeState(currentEpisode){
                scope.isActive = currentEpisode.number === scope.number;
            }

            /**
             * @name playEpisode
             * @methodOf podcast-playlist.directive:podcastEpisode
             * @description Broadcast the episodes data on the $rootScope
             * @private
             */
            scope.playEpisode = function(){
                var episode = {
                    number: scope.number,
                    title: scope.title,
                    description: scope.description,
                    url: scope.url
                };

                $rootScope.$broadcast('podcast:playEpisode', episode);
            };

            /**
             * @name podcast:playEpisode
             * @eventOf podcast-playlist.directive:podcastEpisode
             * @description Subscribe to the event 'podcast:playEpisode' and when published set the episode's state
             * @private
             */
            scope.$on('podcast:playEpisode', function(event, data){
                _setEpisodeState(data);
            });

            /**
             * On load initialize
             */
            _init();
        }
    };

}];