<?php

include 'db_connect.php';
include 'check_user_exist.php';

if(isset($_POST['add_user'])){
	$link=db_connect();
	if (! $link) {
		echo "could not connect";
	}
	else {
		$firstname=$_POST['firstname'];
		$name=$_POST['name'];
		$local=$_POST['local'];
		$mail=$_POST['mail'];
		$pass=$_POST['pass'];

		if(check_user_exist($link, $mail)){
			//echo "user already exist";
			// if user exist give back error
		}		
		else {
			$insertion = mysqli_query($link, "INSERT INTO users (firstname,name,local,mail,pass) VALUES ('$firstname','$name','$local', '$mail', '$pass') " );	
			$inserted = mysqli_query($link, "SELECT * FROM users ORDER BY id DESC LIMIT 1" );
			while ($row = mysqli_fetch_assoc($inserted)) {
				$user_id = $row["id"];
			}
			header ("location: ../views/creation_copropriete.php?user_id=".$user_id."");	
		}
	}	
}

?>				