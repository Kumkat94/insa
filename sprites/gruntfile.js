module.exports = function (grunt) {
    // Configure grunt
    grunt.initConfig({
      sprite:{
        all: {
          src: 'img/*.png',
          dest: 'dest.png',
          destCss: 'destination.css'
        }
      }
    });
  
    // Load in `grunt-spritesmith`
    grunt.loadNpmTasks('grunt-spritesmith');
    grunt.registerTask("default", ["sprite"])

  };