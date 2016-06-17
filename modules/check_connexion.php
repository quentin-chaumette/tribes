<?php
include 'db_connect.php';

$user_mail=$_POST['mail'];
$pass=$_POST['pass'];

$link=db_connect();
if (! $link) {
	//echo "could not connect";
}
else {
	$check_exist = mysqli_query($link, "SELECT * FROM users WHERE mail='$user_mail' " );

	if($row = mysqli_fetch_assoc($check_exist)){
		if($row['pass']==$pass){
			session_start();
			$_SESSION['current_user_id'] = $row['id'];
			$_SESSION['coprop_id'] = $row['coprop_id'];
			$_SESSION['current_user_type'] = $row['user_type'];
			// setcookie("coprop_id", $row['coprop_id'], time()+36000);  /* expire dans 1 heure */
			// setcookie("current_user_id", $row['id'], time()+36000);  /* expire dans 1 heure */
			// setcookie("current_user_type", $row['user_type'], time()+36000);  /* expire dans 1 heure */
			header ("location: ../views/dashboard.php");
		}
	}
	else{
		
	}	
}	
?>