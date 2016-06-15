<?php

function send_mail($mail,$coprop_id){
	
	$to = "".$mail;
	// Sujet
	$subject = 'Tribes - Inscription';

	// message
	$message = '
	<html>
	<head>
		<title>Tribes - Inscription</title>
	</head>
	<body>
		<h1 style="font-weight:bold;">Bienvenue sur Tribes !</h1>
		<a href="http://www.quentinchaumette.fr/tribes/views/rejoindre.php?user_mail='.$mail.'&coprop_id='.$coprop_id.'">Rejoindre Tribes</a>
	</body>
	</html>
	';

	// Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= "X-Priority: 5"."\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	// En-têtes additionnels
	//$headers .= 'To: You <quentin.chaumette@hetic.net>' . "\r\n";
	$headers .= 'From: Tribes <hello@tribes.com>' . "\r\n";

	// Envoi
	if (mail($to, $subject, $message, $headers)){
		//mail envoyé
	}
	else{
		// error
	}
	
}

?>