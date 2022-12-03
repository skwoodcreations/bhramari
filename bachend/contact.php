<?php 
function clean_text($text='') {
    $text = trim($text);
    $text = strip_tags($text);
    $text = addslashes($text);
    $text = htmlspecialchars($text);
    return $text;
}


if (!$_POST) 
{
    die();
}

else 
{
 
 if (empty($_POST["gatway_name"]) && empty($_POST["gatway_email"]) && empty($_POST["gatway_number"])) 
    {
        echo "all_empty";
    }
    else if (empty($_POST["gatway_name"])) 
    {
        echo "empty_name";
    }
    
    
    else if (empty($_POST["gatway_email"]))
    {
        echo "empty_email";
    }

   else if (empty($_POST["gatway_number"]))
    {
        echo "empty_phone";
    }

   
    else 
    {
            // edit this only :)
            
             $email_to_mail = "digitalnocktestmail@gmail.com";
         

               
        $name    = clean_text($_POST["gatway_name"]);
         $mail    = clean_text($_POST["gatway_email"]);
           $phone    = clean_text($_POST["gatway_number"]);
            

        
    $email_message="Details Below\n";
    $email_message .= "Name: ".$name."\n";
    $email_message .= "Email: ".$mail."\n";
    $email_message .= "Phone: ".$phone."\n";
   
	
        /// create email headers
 $email_subject ="Lead from bhramari.in Gallery Page";

$headers = "From:" .$mail;
'Reply-To: '.$mail."\r\n" .
'X-Mailer: PHP/' . phpversion();
if(mail($email_to_mail, $email_subject, $email_message, $headers))
{
	echo "Thank you for contacting us. Will get back to you shortly";
}
else
	
	{
		echo "Not sent . Try again after some time";
		}


}
}




?>