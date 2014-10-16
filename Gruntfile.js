module.exports = function(grunt) {
    /**
     * We want a global devkit
     * Export env NODE_PATH otherwise we use default.
     */
    var node_path = process.env.NODE_PATH ? process.env.NODE_PATH : '/usr/local/lib/node_modules';
    /**
     * Initialize grunt with webino-devkit config
     */
    grunt.config.init((function () {
        return require(node_path + '/webino-devkit');
    })().config(grunt, ['zend', 'module', 'auth']));
};
