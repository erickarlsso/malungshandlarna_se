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
      js: {
        files: '_lib/js/*.js',
        tasks: ['concat:dev', 'uglify:dev', 'bsReload:all']
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
    concat: {
      options: {
        separator: ';',
      },
      dev: {
        src: ['_lib/js/main.js', '_lib/js/vendor/owl.carousel.js'],
        dest: '_lib/js/_main.merge.js',
      },
    },
    uglify: {
      options: {

      },
      dev: {
        files: {
          '_lib/js/main.min.js': ['_lib/js/_main.merge.js']
        }
      }
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
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-autoprefixer');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-browser-sync');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.registerTask('default', ['browserSync', 'watch']);

};
