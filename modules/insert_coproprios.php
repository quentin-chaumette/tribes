<?php
include 'db_connect.php';
include 'check_user_exist.php';
include 'send_mail.php';

if(isset($_POST['add_coproprios'])){
	$mails=$_POST['mail'];
	$coprop_id=$_POST['coprop_id'];
	$link=db_connect();
	if (! $link) {
		//echo "could not connect";
	}
	else{
		foreach ($mails as $key => $mail) {
			if(check_user_exist($link, $mail)){
				// if user exist do nothing
			}
			else {
				if ($mail != "") {
					$insertion = mysqli_query($link, "INSERT INTO users (mail, coprop_id) VALUES ('$mail', '$coprop_id') " );
					send_mail($mail, $coprop_id);
				}
				else{}
			}
		}
	}
	header("location: ../views/dashboard.php");
}
else{
	header("location: ../views/dashboard.php");
}
?>