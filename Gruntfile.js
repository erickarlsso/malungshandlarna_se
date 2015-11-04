module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    watch: {
      options: {
        spawn: false
      },
      sass: {
        files: '_assets/scss/**/*.scss',
        tasks: ['sass', 'autoprefixer', 'bsReload:css']
      },
      js: {
        files: '_assets/js/*.js',
        tasks: ['concat:dev', 'uglify:dev', 'bsReload:all']
      },
      html: {
        files: '_assets/*.html',
        tasks: ['bsReload:all']
      },
      php: {
        files: ['./*.php', '_assets/php/*.php', '_parts/*.php'],
        tasks: ['bsReload:all']
      }
    },
    sass: {
      dev: {
        files: {
          '_assets/css/site.css': '_assets/scss/site.scss'
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
        src: ['_assets/js/main.js', '_assets/js/vendor/owl.carousel.js'],
        dest: '_assets/js/_main.merge.js',
      },
    },
    uglify: {
      options: {

      },
      dev: {
        files: {
          '_assets/js/main.min.js': ['_assets/js/_main.merge.js']
        }
      }
    },
    autoprefixer: {
      options: {
        browsers: ['last 5 versions', 'ie 8']
      },
      css: {
        src: '_assets/css/site.css',
        dest: '_assets/css/site.css'
      }
    },
    jshint: {
      dev: ['_assets/js/*.js']
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
