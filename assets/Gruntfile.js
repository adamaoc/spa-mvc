module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    sass: {
      options: {
        includePaths: ['bower_components/foundation/scss']
      },
      dist: {
        options: {
          outputStyle: 'compressed'
        },
        files: {
          'css/main.css': 'scss/main.scss'
        }        
      }
    },

    uglify: {
      my_target: {
        files: {
          'js/main.min.js': 
          [
            'bower_components/jquery/dist/jquery.min.js', 
            'bower_components/foundation/js/foundation.min.js', 
            'src/main.js'
          ]
        }
      }
    },

    watch: {
      grunt: { files: ['Gruntfile.js'] },

      sass: {
        files: 'scss/**/*.scss',
        tasks: ['sass']
      }
    },

    postcss: {
      options: {
        map: true,
        processors: [
          require('autoprefixer-core')({browsers: 'last 1 version'}).postcss,
          require('csswring').postcss
        ]
      },
      dist: {
        src: 'css/*.css'
      }
    }
  });

  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-postcss');

  grunt.registerTask('build', ['sass', 'postcss', 'uglify']);
  
  grunt.registerTask('default', ['build']);
}