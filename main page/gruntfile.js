module.exports = function( grunt ) {
 
grunt.initConfig({

	concat: {
	  	css: {
	    	src: ['css/general.css',
		    	  'css/header.css',
		    	  'css/home.css',
		    	  'css/normalize.css',
		    	  'css/plans.css',
		    	  'css/inputs.css',
		    	  'css/nav.css',
		    	  'css/buttons.css',
		    	  'css/footer.css',
		    	  'css/details.css'],
	    	dest: 'css/main.css'
	  	}
	},

	cssmin: {
	  	css: {
	    	src: 'css/main.css',
	    	dest: 'css/main.min.css'
	  	},
	},

	uglify: {
		options: {
	      mangle: false
	    },
	    my_js: {
	      files: {
	        'js/main.min.js': ['js/scripts.js']
	      }
	    }
	 },

	  watch : {
	      dist : {
	        files : [
	          'css/*',
	          'js/*'
	        ],
	 
	        tasks : [ 'concat','cssmin', 'uglify' ]
	      }
	    }, // watch




});

	//concat - plugins
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');

	//tarefas
	grunt.registerTask( 'default', [ 'concat', 'cssmin', 'uglify' ] );
	grunt.registerTask( 'w', [ 'watch' ] );

};