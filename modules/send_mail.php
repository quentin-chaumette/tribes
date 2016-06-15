<?php

function send_mail($mail){
	
	define('MAIL_DESTINATAIRE','$mail'); //  email
	define('MAIL_SUJET','Message de Test');

	//Préparation de l'entête du mail:
	$mail_entete  = "MIME-Version: 1.0\r\n";
	$mail_entete .= "From: {tribes} "	."<{-app}>\r\n";
	$mail_entete .= "Reply-To: \r\n";
	$mail_entete .= 'Content-Type: text/plain; charset="iso-8859-1"';
	$mail_entete .= "\r\nContent-Transfer-Encoding: 8bit\r\n";
	$mail_entete .= 'X-Mailer:PHP/' . phpversion()."\r\n";

	// préparation du corps du mail
	$mail_corps  = "Message de Tribes\n";
	$mail_corps .= "Test";

	// envoi du mail
	if (mail(MAIL_DESTINATAIRE,MAIL_SUJET,$mail_corps,$mail_entete)) {
	//Le mail est bien expédié
		echo "mail expédié";
	} else {
	//Le mail n'a pas été expédié
		echo "Une erreur est survenue";
	}
/*
   $from = "sender@sender.com";
   $headers = "From:" . $from;
   echo mail ("quentin.chaumette@hetic.net" ,"headline" , "text", $headers);
	*/
}

?>