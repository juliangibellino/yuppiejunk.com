'use strict';

/**
 * @name podcast-playlist.controller:currentEpisode
 * @description Current episode controller responsible for managing the current episode in session
 */
module.exports = ['$scope', function($scope) {

    /**
     * @name currentEpisodeTitle
     * @propertyOf podcast-playlist.controller:currentEpisode
     * @description Stores the title of the current episode in session
     * @type {string}
     */
    $scope.currentEpisodeTitle = null;

    /**
     * @name currentEpisodeDescription
     * @propertyOf podcast-playlist.controller:currentEpisode
     * @description Stores the description of the current episode in session
     * @type {string}
     */
    $scope.currentEpisodeDescription = null;

    /**
     * @name currentEpisodeNumber
     * @propertyOf podcast-playlist.controller:currentEpisode
     * @description Stores the episode number of the current episode in session
     * @type {string}
     */
    $scope.currentEpisodeNumber = null;

    /**
     * @name currentEpisodeNumber
     * @propertyOf podcast-playlist.controller:currentEpisode
     * @description Stores the media url of the current episode in session
     * @type {string}
     */
    $scope.currentEpisodeUrl = null;

    /**
     * @name _setCurrentEpisode
     * @methodOf podcast-playlist.controller:currentEpisode
     * @param {object} data An episode object
     * @description Sets the current episode data
     */
    function _setCurrentEpisode(data){
        $scope.currentEpisodeTitle = data.title;
        $scope.currentEpisodeDescription = data.description;
        $scope.currentEpisodeNumber = data.number;
        $scope.currentEpisodeUrl = data.url;
    }

    /**
     * @name _setCurrentEpisode
     * @eventOf podcast-playlist.controller:currentEpisode
     * @description Subsribes to the event 'podcast:playEpisode' and when published sets the current episode data
     */
    $scope.$on('podcast:playEpisode', function(event, data){
        _setCurrentEpisode(data);
    });

}];