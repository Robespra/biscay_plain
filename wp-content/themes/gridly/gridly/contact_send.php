
<?php
	
	$your_email = 'robespra@visu-synect.com'; // Your email address
	$subject = 'Etre informé sortie Dico Poïesis'; // Email subject
	
	$email = isset($_POST['email']) && $_POST['email'] ? $_POST['email'] : ''; // Visitor Email
		
	$full_message = 'Website: '.$website. "\r\n\r\n Message:".$message;

	if($email)
	{
		$headers = 'From: '.$name.' <'.$email.'>' . "\r\n" .
		'Reply-To: '.$email.'' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
		$headers .= 'Content-type: text/plain; charset=UTF-8' . "\r\n";
			
		//------------------------------------------------
		// Send out email to site admin
		//------------------------------------------------
		if(@mail($your_email, $subject, $full_message, $headers))
			die("Message envoyé, merci !");
		else
			die("erreur lors de l'envoi du message");
	}
	else
	{
		die("error");
	}
	
?>
