module.exports = function(grunt) {
    grunt.initConfig((function () {
        return require('webino-devkit');
    })().config(grunt, ['zend', 'module', 'auth']));
};
