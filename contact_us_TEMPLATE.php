<?php
session_start();
include "header.php";


if (isset ($_POST['submit']))       
{                                     
	$to="myemailisjack@gmail.com";                       
	$subject= $_POST["subject"];      
	$email=   $_POST["email"];                       
	$message= $_POST["message"];                         
	$headers="From: $email";

	if ($_SESSION['6_letters_code'] == $_POST['captcha']) {
		$sent = mail($to, $subject, $message, $headers);
	               // This is how we test whether the 
		
		// ENTER THE PHP function to call mail using the variables above. This is in the powerpoint presentation for PHP Mail. 
		
		
		if($sent) {
			print "Your mail was sent successfully";
		}
		else {
			print "We encountered an error sending your mail";
		}
	}
	else {
		print "Captcha Incorrect. Please try again";
	}
}
else { 
	echo "<form method='post' action='contact.php'
	Email: <input name='email' type='text' /><br/>
	Subject: <input name='subject' type='text' /><br/>
	Message:<br /> <textarea name='message' rows='15' cols='40'></textarea><br/>
	<input type='submit' name='submit' value='Send Email'/></form>";
}
?>
       <!-- THIS IS WHERE YOU ENTER ALL THE HTML FOR THE EMAIL FORM > 

			MAKE SURE YOU HAVE   --> 
		<form method="post" action="contact.php">
		
	    <!-- THEN PUT IN ALL THE <input> and <textarea> TAGS THAT YOU NEED. 	   
		
		Near the bottom, insert:            --> 

     	Captcha:<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id="captchaimg" >
	
	    <!-- THEN MAKE SURE YOU HAVE A TEXT BOX FOR ENTERING THE CAPTCHA CODE LIKE THIS: -->
       Enter Captcha Code:<input name="captcha" type="text" >

       <!-- CREATE two SUBMIT BUTTONS. Name one "sendMail" (if you change this name, you must change it on line 6 above. 
	   Name the other submit button "anotherCaptcha" (or something similar)

       Add your close form and close html tags here. 
	   
	   The next PHP block serves to add in the close brace for the 'else' above --> 
<?php 
include "footer.php";
?>