<?php
include 'db_connect.php';
include 'check_user_exist.php';
include 'send_mail.php';

if(isset($_POST['add_coproprios'])){
	$mails=$_POST['mail'];
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
					$insertion = mysqli_query($link, "INSERT INTO users (mail) VALUES ('$mail') " );
					send_mail($mail);
				}
				else{}
			}
		}
	}
	//header("location: ../views/dashboard.php");
}
else{
	//header("location: ../views/dashboard.php");
}
?>