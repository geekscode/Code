$(function() {	
	$('#addUsers').validate({			
		    rules: {
		      username: {
		        minlength: 4,
		        maxlength:10,
		        required: true
		      },
		       password: {
		         required: true,
		         minlength: 6,
		         maxlength:20
		       },
		       passwordConf: {
		       	 required:true,
		         equalTo: "#password"
		       },
		       email: {
		         required: true,
		         email: true
		       },
		       namalengkap: {
		       	minlength: 4,
		         required: true
		       },
		       emailConf: {
		         required:true,
		         equalTo: "#email"
		       },
		       telp: {
		         required:true,
		         digits:true,
		         minlength:10,
		         maxlength:20
		       },
		       alamat:{
		       	required:true,
		       	minlength:5,
		       	maxlength:50
		       }
		    },
		    highlight: function(label) {
		    	$(label).closest('.control-group').addClass('error');
		    },
		    success: function(label) {
		    	$(label).closest('.control-group').addClass('success');
		    }
		  });

	$('#addKategori').validate({
		rules: {
		       namakategori: {
		        minlength: 4,
		        maxlength:30,
		        required: true
		      },
		       keterangan: {
		         required: true,
		      }

		       },
		    	highlight: function(label) {
		    	$(label).closest('.control-group').addClass('error');
		    	},
		    	success: function(label) {
		    	$(label).closest('.control-group').addClass('success');
		    	}
		});
});