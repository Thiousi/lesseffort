module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sass: {
            dist: {
                files: {
                    'assets/css/base.css' : 'assets/css/base.scss',
                    'assets/css/shopkit.css' : 'assets/css/shopkit.scss'
                }
            }
        },
        watch: {
            css: {
                files: 'assets/css/*.scss',
                tasks: ['sass']
            }
        }
    });
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.registerTask('default',['watch']);
}