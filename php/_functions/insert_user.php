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

		$insertion = mysql_query( "INSERT INTO users (firstname,name,local,mail,pass) VALUES ('$firstname','$name','$local', '$mail', '$pass') ", $link );
		if(! $insertion){
			header ('location: ../../inscription.php');
		}
		else{
			$inserted = mysql_query( "SELECT * FROM users ORDER BY id DESC LIMIT 1", $link );
			while ($row = mysql_fetch_assoc($inserted)) {
				$user_id = $row["id"];
			}
			header ("location: ../../creation_copropriete.php?user_id=".$user_id."");
		}
	}	
}

?>