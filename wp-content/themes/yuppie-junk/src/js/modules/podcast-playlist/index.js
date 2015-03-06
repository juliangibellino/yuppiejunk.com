'use strict';

//
require('angular');

var app = angular.module('podcast-playlist', []);

app.controller('currentEpisodeCtrl', require('./controllers/current-episode.js'));
app.controller('recentEpisodesCtrl', require('./controllers/recent-episodes.js'));
app.directive('podcastPlayer', require('./directives/podcast-player.js'));
app.directive('podcastEpisode', require('./directives/podcast-episode.js'));
