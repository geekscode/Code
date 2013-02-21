$(function() {
      // Setup drop down menu
      $('.dropdown-toggle').dropdown();
     
      // Fix input element click problem
      $('.dropdown input, .dropdown label').click(function(e) {
        e.stopPropagation();
    });

      $('#User').validate({
	    rules: {
	      username: {
	        minlength: 5,
	        maxlength:20,
	        required: true
	      },
	       password: {
	         required: true,
	         minlength: 6,
	         maxlength:30
	       },
	       passver: {
	       	 required:true,
	         equalTo:"#password"
	       },
	       email: {
	         required: true,
	         email: true
	       },
	       emailver: {
	       	required:true,
	       	equalTo:"#email"
	       },
	       namalengkap: {
	       	minlength: 4,
	         required: true
	       },
	       telp: {
	         minlength: 10,
	         maxlength:15,
	         required: true,
	         digits:true
	       }
	    },
	    highlight: function(label) {
	    	$(label).closest('.control-group').addClass('error');
	    },
	    success: function(label) {
	    	label
	    		.addClass('valid')
	    		.closest('.control-group').addClass('success');
	    }
	  });
	  $('#MenuUtama').validate({
	    rules: {
	      idutama: {
	        minlength: 1,
	        maxlength:10,
	        required: true,
	        digits:true
	      },
	       namamenu: {
	         required: true,
	         minlength: 4,
	         maxlength:30
	       }	       
	    },
	    highlight: function(label) {
	    	$(label).closest('.control-group').addClass('error');
	    },
	    success: function(label) {
	    	label
	    		.addClass('valid')
	    		.closest('.control-group').addClass('success');
	    }
	  });
	  $('#SubMenu').validate({
	    rules: {
	      id: {
	        minlength: 1,
	        maxlength:10,
	        required: true,
	        digits:true
	      },
	       namasub: {
	         required: true,
	         minlength: 4,
	         maxlength:30
	       },
	       idmain:{
	       	minlength: 1,
	        maxlength:10,
	        required: true,
	        digits:true
	       }      
	    },
	    highlight: function(label) {
	    	$(label).closest('.control-group').addClass('error');
	    },
	    success: function(label) {
	    	label
	    		.addClass('valid')
	    		.closest('.control-group').addClass('success');
	    }
	  });

	  
}); // end document.ready