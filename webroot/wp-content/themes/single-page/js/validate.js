jQuery(document).ready(function(){
    console.log("works");
	var jQueryform = jQuery('#emailForm'),
     	formMessages = jQuery('#form-messages');
        
	jQueryform.validate({
		rules:{
			fname:{
				required:true,
				minlength:2
				},
			lname:{
				required:true,
				minlength:3
				},		
			email:{
				required:true,
				email:true
				},
			message:{
				required:true
				}
			},//end rules
		messages:{
			fname:{
				required:'You must enter your first name',
				minlength:'Your first name should be at least 2 characters long'
				},
			lname:{
				required:'You must enter your last name',
				minlength:'Your last name should be at least 3 characters long'
				},
			email: {
				required: "Please enter your e-mail address.",
				email: "This is not a valid email address"
				},
			message:{
				required:'Please enter your message'
				}
			}//end of message
	});//end of validate
	
	
	jQueryform.submit(function(e){
		e.preventDefault();
		  
		var isvalid = jQueryform.valid(),
		 	form = jQuery(this),
		 	formData = jQueryform.serialize();
		 	 
		if(isvalid){
			jQuery.ajax({
				type: 'POST',
				url: jQueryform.attr('action'),
				data: formData
			})
			
			.done(function(response) {
			    // Make sure that the formMessages div has the 'success' class.
			    jQuery(formMessages).removeClass('errorA');
			    jQuery(formMessages).fadeIn(800).addClass('success');
			
			    // Set the message text.
			    jQuery(formMessages).text(response);
			
			    // Clear the form.
				jQuery('#fname').val('');
				jQuery('#lname').val('');
				jQuery('#email').val('');
				jQuery('#text').val('');
			})
			
			.fail(function(data) {
			    // Make sure that the formMessages div has the 'error' class.
				jQuery(formMessages).removeClass('success');
				jQuery(formMessages).fadeIn(800).addClass('errorA');
			
			    // Set the message text.
			    if (data.responseText !== '') {
					jQuery(formMessages).text(data.responseText);
			    } else {
					jQuery(formMessages).text('Oops! An error occured and your message could not be sent.');
			    }
			});
			
		}
		
	});//displaying a message if form passed as valid and submited
			
});//end of ready function

			
			
			
			
			
			