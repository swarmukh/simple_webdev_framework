<?php

	@require_once("Common/Project.php");
	@require_once("Library/PHPMailer/class.phpmailer.php");
		
	$mail = new PHPMailer();
	
	$mail->IsSMTP(); // Use SMTP
	$mail->SMTPDebug   = 0; // 2 to enable SMTP debug information
	$mail->SMTPAuth    = true; // enable SMTP authentication
	$mail->SMTPSecure  = "ssl"; //"tls"; //Secure conection
	$mail->Port        = 465; //587; // set the SMTP port
	
	$mail->Host        = "smtp.gmail.com"; // Sets SMTP server
	
	$mail->Username    = PROJECT_CONTACT_EMAIL; // SMTP account username
	$mail->Password    = 'A1B2C3D4'; // SMTP account password
	
	$mail->Priority    = 1; // Highest priority - Email priority (1 = High, 3 = Normal, 5 = low)
	
	$mail->ContentType = 'text/html; charset=utf-8\r\n';
	$mail->WordWrap    = 900; // RFC 2822 Compliant for Max 998 characters per line
	
	$mail->From        = PROJECT_CONTACT_EMAIL;	// SMTP account username;
	$mail->FromName    = PROJECT_NAME;

	$mail->isHTML(true);
	
	$mail->AltBody 	   = "An Email was sent from ".PROJECT_NAME." regarding your query, but it seems it hasn't been delivered. Kindly contact ".PROJECT_NAME." on ".PROJECT_CONTACT_PHONE." or at ".PROJECT_CONTACT_EMAIL.".";
	
?>