'use strict';

/**
 * @name podcast-playlist.directive:podcastPlayer
 * @description Podcast player directive responsible for managing the current episode in session in a JWPlayer
 */
module.exports = [function() {
    /**
     * @name jwplayer
     * @propertyOf podcast-playlist.directive:podcastPlayer
     * @description Stores a reference to the jwplayer API
     * @type {object}
     * @private
     */
    var jwplayer = require('jwplayer');

    /**
     * @name jwplayer.key
     * @propertyOf podcast-playlist.directive:podcastPlayer
     * @description Stores the jwplayer API key
     * @type {string}
     * @private
     */
    jwplayer.key = '+kV0GeiZJZhgZPB9B4FeiNa+mTdllC1ff12UWw==';

    return {
        restrict: 'AE',
        scope: {
            id : '@id',
            media : '@'
        },
        link: function(scope, element, attrs, controller){

            /**
             * @name currentMedia
             * @propertyOf podcast-playlist.directive:podcastPlayer
             * @description Stores the current media endpoint in session
             * @type {string}
             * @private
             */
            scope.currentMedia = scope.media;

            /**
             * @name _setupJwplayer
             * @methodOf podcast-playlist.directive:podcastPlayer
             * @description Sets up the jwplayer element
             * @private
             */
            function _setupJwplayer(){
                jwplayer(scope.id).setup({
                    file: scope.media,
                    height: 30,
                    width: "100%"
                });
            }

            /**
             * @name _loadEpisode
             * @methodOf podcast-playlist.directive:podcastPlayer
             * @description Check if new episode is not currently in session and if not, load and set new media
             * @private
             */
            function _loadEpisode(episodeUrl){
                if(scope.currentMedia !== episodeUrl){
                    scope.currentMedia = episodeUrl;
                    jwplayer().load([{file: episodeUrl}]);
                    jwplayer().play();
                }
            }

            /**
             * @name podcast:playEpisode
             * @eventOf podcast-playlist.directive:podcastPlayer
             * @description Subscribe to 'podcast:playEpisode' and when published load the episode
             * @private
             */
            scope.$on('podcast:playEpisode', function(event, data){
                _loadEpisode(data.url);
            });

            /**
             * On load setup the jwplayer
             */
            _setupJwplayer();
        }
    };

}];