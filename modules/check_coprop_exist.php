<?php

function check_coprop_exist($link, $title){
		$check_exist = mysqli_query($link, "SELECT * FROM coprops WHERE title='$title' " );

		if($row = mysqli_fetch_row($check_exist)){
			return true;
		}
		else{
			return false;
		}		
}

?>