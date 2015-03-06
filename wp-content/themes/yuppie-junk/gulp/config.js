var path = require('path');

global.SRC_FOLDER = './src';
global.BUILD_FOLDER = 'library';

global.config = {
    paths: {
        src: {
            styles: SRC_FOLDER + '/scss',
            scripts: SRC_FOLDER + '/js',
            fonts: SRC_FOLDER + '/fonts'
        },
        build: {
            styles: BUILD_FOLDER + '/css',
            scripts: BUILD_FOLDER + '/js',
            fonts: BUILD_FOLDER + '/fonts'
        }
    },
    filenames: {
        build: {
            scripts: 'bundle.js'
        }
    }
};
