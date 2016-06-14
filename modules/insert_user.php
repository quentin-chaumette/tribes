<?php

include 'db_connect.php';

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
		$confirm_pass=$_POST['confirm_pass'];

		$insertion = mysqli_query($link, "INSERT INTO users (firstname,name,local,mail,pass) VALUES ('$firstname','$name','$local', '$mail', '$pass') " );
		if(! $insertion){
			header ('location: ../views/inscription.php');
		}
		else{
			$inserted = mysqli_query($link, "SELECT * FROM users ORDER BY id DESC LIMIT 1" );
			while ($row = mysqli_fetch_assoc($inserted)) {
				$user_id = $row["id"];
			}
			header ("location: ../views/creation_copropriete.php?user_id=".$user_id."");
		}
	}	
}

?>