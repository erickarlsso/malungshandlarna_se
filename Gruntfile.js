module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    watch: {
      options: {
        spawn: false
      },
      sass: {
        files: '_lib/scss/**/*.scss',
        tasks: ['sass', 'autoprefixer', 'bsReload:css']
      },
      html: {
        files: '_lib/*.html',
        tasks: ['bsReload:all']
      },
      php: {
        files: ['./*.php', '_lib/php/*.php', '_parts/*.php'],
        tasks: ['bsReload:all']
      }
    },
    sass: {
      dev: {
        files: {
          '_lib/css/site.css': '_lib/scss/site.scss'
        }
      },
      options: {
        outputStyle: 'compressed',
        sourceMap: true
      },
    },
    autoprefixer: {
      options: {
        browsers: ['last 5 versions', 'ie 8']
      },
      css: {
        src: '_lib/css/site.css',
        dest: '_lib/css/site.css'
      }
    },
    jshint: {
      dev: ['_lib/js/*.js']
    },
    browserSync: {
      dev: {
        options: {
          proxy: "localhost:8888",
          background: true
        }
      }
    },
    bsReload: {
      css: {
        reload: "site.css"
      },
      all: {
        reload: true
      }
    }

  });

  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-browser-sync');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['browserSync', 'watch']);

};
