<?php

include 'db_connect.php';

if(isset($_POST['add_coproprios'])){
	$link=db_connect();
	if (! $link) {
		echo "could not connect";
	}
	else {

		$mails=$_POST['mail'];
		echo "<pre>";
		var_dump($mails);
		echo "</pre>----------<br/><br/>";

		foreach ($mails as $key => $value) {

			$check_exist = mysql_query( "SELECT * FROM users WHERE mail='$value' ", $link );
			if($row = mysql_fetch_row($check_exist)){

			}
			else{
				$insertion = mysql_query( "INSERT INTO users (mail) VALUES ('$value') ", $link );
				// envoi mail
			}

		}
	}
}

?>