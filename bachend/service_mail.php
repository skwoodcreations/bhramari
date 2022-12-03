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
	if (empty($_POST["modal_contact_name"]) && empty($_POST["modal_contact_phone"]) && empty($_POST["modal_contact_email"]) && empty($_POST["modal_product"])) 
	{
		echo "all_empty";
	}
	else if (empty($_POST["modal_contact_name"])) 
	{
		echo "empty_modal_contact_name";
	}
	else if (empty($_POST["modal_contact_email"])) 
	{
		echo "empty_modal_contact_email";
	}
	else if (empty($_POST["modal_contact_phone"])) 
	{
		echo "empty_modal_contact_phone";
	}
	
	
	
	else 
	
	{
		
			
			
			
			
					
					
				$email_to_mail = "info@bhramari.in";
		
							
							$name	 = clean_text($_POST["modal_contact_name"]);
							$mail	 = clean_text($_POST["modal_contact_email"]);
							$phone	 = clean_text($_POST["modal_contact_phone"]);
							$product	 = clean_text($_POST["modal_product"]);
						    $message	 = clean_text($_POST["modal_contact_message"]);


						
	$email_message="Details Below\n";
    $email_message .= "Name: ".$name."\n";
    $email_message .= "Email: ".$mail."\n";
	$email_message .= "Contact NO: ".$phone."\n";
	$email_message .= "Product : ".$product."\n";
	
 $email_message .= "Message: ".$message."\n";


        /// create email headers
$email_subject ="Lead from bhramari.in Service Page";

$headers = "From:" .$mail;
'Reply-To: '.$mail."\r\n" .
'X-Mailer: PHP/' . phpversion();
if(@mail($email_to_mail, $email_subject, $email_message, $headers))
{
	echo "Thank you for contacting us. We will contact you soon";
}
else
	
	{
		echo "Not sent";
	}
							
		
							
		
	}


}






?>