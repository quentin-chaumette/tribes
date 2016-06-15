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

		$update = mysqli_query($link, "UPDATE users SET firstname='$firstname',name='$name',local='$local',pass='$pass' WHERE mail='$mail' " );

		header ("location: ../views/dashboard.php");
	}
}
?>