<?php

function check_user_exist($link, $mail){
		$check_exist = mysqli_query($link, "SELECT * FROM users WHERE mail='$mail' " );

		if($row = mysqli_fetch_row($check_exist)){
			return true;
		}
		else{
			return false;
		}		
}

?>