(function($) {

	'use strict';
	
	var contactFormXML;
	var contactFormRequestHandler;
	
	//var templateDir = '/idigital'; //local testing only
	
	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
	  contactFormXML=new XMLHttpRequest();
	} else {// code for IE6, IE5
	  contactFormXML=new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	function sendTrialInfo() {
	
		contactFormXML.open("POST", "js/ajax-trial-form/send_email.php",true);
		contactFormXML.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		var form = $('#pm-trial-form');
		contactFormXML.send(form.serialize());
		contactFormXML.onreadystatechange=contactFormRequestHandler;
	}
	
	contactFormRequestHandler=function(data){
	
		if (contactFormXML.readyState==4 && contactFormXML.status==200)	{
			
			var responseTextObject = jQuery.parseJSON(contactFormXML.responseText);

				
			if(responseTextObject.status == "name_error") {
				
				$('#pm-trial-form-response').html('Please provide your full name.');
				$('#pm_trial_form_name').addClass('invalid_field');
				bindClickEvent();
				
			} else if(responseTextObject.status == "email_error") {
				
				$('#pm-trial-form-response').html('Please provide a valid email address.');
				$('#pm_trial_form_email').addClass('invalid_field');
				bindClickEvent();
				
			} else if(responseTextObject.status == "security_error") {
				
				$('#pm-trial-form-response').html('Invalid security code entered.');
				$('#security_code').addClass('invalid_field');
				bindClickEvent();
				
			} else if(responseTextObject.status == "success"){
				
				$('#pm-trial-form-response').html('Your inquiry has been received, thank you.');
				$('#pm-trial-form-btn').fadeOut();
				
			} else if(responseTextObject.status == "failed"){
				
				$('#pm-trial-form-response').html('A system error occurred. Please try again later.');
				$('#pm-trial-form-btn').fadeOut();
				
			}

	
		}
	
	}
	
	$(document).ready(function(e) {
		
		bindClickEvent();
		
		$('#pm_trial_form_name').focus(function(e) {
			$(this).removeClass('invalid_field');
		});
		
		$('#pm_trial_form_email').focus(function(e) {
			$(this).removeClass('invalid_field');
		});

	
	});//end of jQuery
	
	function bindClickEvent() {
			
		$('#pm-trial-form-btn').click(function(e) {
					
			sendTrialInfo();
		
			$(this).unbind("click");
			
			$('#pm-trial-form-response').html("Validating message, please wait...");
						
			//$('#form_response').show();
			
			//alert('submit form');
			e.preventDefault();
		});
			
	}
	
})(jQuery);