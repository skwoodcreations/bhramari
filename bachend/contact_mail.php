<?php 


function clean_text($text='') {
	$text = trim($text);
	$text = strip_tags($text);
	$text = addslashes($text);
	$text = htmlspecialchars($text);
	return $text;
}


if (!$_POST) {
	die();
}else {
	if (empty($_POST["bhramari_name"]) && empty($_POST["bhramari_phone"]) && empty($_POST["bhramari_email"])) 
	{
		echo "all_empty";
	}
	else if (empty($_POST["bhramari_name"])) 
	{
		echo "empty_bhramari_name";
	}
	else if (empty($_POST["bhramari_email"])) 
	{
		echo "empty_bhramari_email";
	}
	else if (empty($_POST["bhramari_phone"])) 
	{
		echo "empty_bhramari_phone";
	}
	
	
	
	else 
	
	{
		
			
			
			
			
					
					
					$email_to_mail = "info@bhramari.in";
		
							
							$name	 = clean_text($_POST["bhramari_name"]);
							$mail	 = clean_text($_POST["bhramari_email"]);
							$phone	 = clean_text($_POST["bhramari_phone"]);
							$subject	 = clean_text($_POST["bhramari_subject"]);
							$message	 = clean_text($_POST["bhramari_message"]);


						
	$email_message="Details Bellow\n";
    $email_message .= "Name: ".$name."\n";
    $email_message .= "Email: ".$mail."\n";
	$email_message .= "Contact NO: ".$phone."\n";
	
	$email_message .= "subject: ".$subject."\n";
   $email_message .= "Message: ".$message."\n";


        /// create email headers
 $email_subject ="Lead from bhramari.in Website";

$headers = "From:" .$mail;
'Reply-To: '.$mail."\r\n" .
'X-Mailer: PHP/' . phpversion();
if(mail($email_to_mail, $email_subject, $email_message, $headers))
{
	echo "Thank you for contacting us. We will contact you soon. ";
   
}
else
	
	{
		echo "Not sent";
	}
							
		
							
		
	}


}






?>