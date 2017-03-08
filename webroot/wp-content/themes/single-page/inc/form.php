<?php
		//This function trims and uses the htmlentities built in function to clean the input data
        
		function clean($data){
	        	$trimmed = trim($data);
	        	$trimmedData = htmlentities($trimmed);
	        	return $trimmedData;
	        	}
        	
        // end of clean function
		$valid = array('plain','html');
		$form_is_submitted = false;
		$errors_detected = false;
       	$cleanData = array();
       	$errors = array();
        
        // data validation
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
			$form_is_submitted = true;
			$fname = clean($_POST['fname']);
			$lname = clean($_POST['lname']);
			$email = clean($_POST['email']);
			
			// First name validation
			if (isset($fname)){
				if ($fname!=""){
					if(strlen($fname) < 150){
						
						if(strlen($fname) > 2){
						
							if(ctype_alpha($fname)){
								$fname = ucfirst($fname);
								$cleanData['First name'] = $fname;
							}else{
								$errors_detected = true;
								$errors['First name'] = 'Not allowed characters. Only alphabetic characters or space.';
							}
						}else{
							$errors_detected = true;	
							$errors['First name'] = 'First name should be at least 2 characters long.'; 
						}
					}else{
						$errors_detected = true;
						$errors['First name'] = 'First name should not be more than 150 characters long.';
					}
				}else{
					$errors_detected = true;
					$errors['First name'] = ' empty.';
				}
			
			}
			//Last name validation
			
			if (isset($lname)) {
				
				if ($lname!=""){
					
					if (strlen($lname) < 150) {
						
						if (strlen($lname) > 2) {
							
							if(ctype_alpha($lname)){
								$lname = ucfirst($lname);
								$cleanData['Last name'] = $lname;
							}else{
								$errors_detected = true;
								$errors['Last name'] = 'Not allowed characters. Only alphabetic characters or space.';
							}
						}else{
							$errors_detected = true;	
							$errors['Last name'] = 'First name should be at least 2 characters long.'; 
						}
					}else{
						$errors_detected = true;
						$errors['Last name'] = 'First name should not be more than 150 characters long.';
					}
				}else{
					$errors_detected = true;
					$errors['Last name'] = ' empty.';
				}
			
			}
						
			//email validation
			
			if (isset($email)) {
				if ($email!="") {
					$email = clean($email);
					if(filter_var($email,FILTER_VALIDATE_EMAIL)){
						$cleanData['Email'] = $email;	  
					} else {
						$errors_detected = true;
						$errors['Email'] = 'Not valid email address! e.g. you@example.com.'; 
					}
				} else {
					$errors_detected = true;
					$errors['Email'] = 'The field is empty! e.g. you@example.com.';
				}
			}
			
			$message = htmlentities($_POST['message']);
			$message = wordwrap($message, 70, "\r\n");
			$cleanData['message'] = $message;
			
			
	
			// end of validation!
			
			if ($form_is_submitted === true && $errors_detected === false){
				
				$to = 'soldyx@gmail.com';
				$from = $cleanData['Email'];
				$fname = $cleanData['First name'];
				$lname = $cleanData['Last name'];
				$name = $fname.' '.$lname;
				$subject = "Message for you";
				$message = $name .  " wrote the following:" . "\n\n" . $_POST['message'];
				
				
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'To: Zoltan <soldyx@gmail.com>'. "\r\n";
				$headers .= "From:" . $from . "\r\n";
				$headers .= "X-Mailer: PHP/".phpversion();
				
				if(mail($to,$subject,$message,$headers)){
					// Set a 200 (okay) response code.
					http_response_code(200);
					echo "Thank you " .$name. "! Your message has been sent, I'll get back to you shortly!";
				}else {
					// Set a 500 (internal server error) response code.
					http_response_code(500);
					echo "Oops! Something went wrong and we couldn't send your message.";
				}
			}
									
		}else{
			// Not a POST request, set a 403 (forbidden) response code.
			http_response_code(403);
			echo "There was a problem with your submission, please try again.";
		}



?>





