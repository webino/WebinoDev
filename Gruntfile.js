var root;
if (undefined === process.env.NODE_PATH) {
    require('shelljs/global');
    process.env.NODE_PATH = root = exec('npm root -g', {silent: true}).output.trim() + '/';
}
module.exports = function(grunt) {
    grunt.initConfig((function () {
        return require(root + 'webino-devkit');
    })().config(grunt, ['zend', 'module', 'auth']));
};
