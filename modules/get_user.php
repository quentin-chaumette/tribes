<?php

function get_user($user_id){
	$link=db_connect();
	if (! $link) {
		//echo "could not connect";
	}
	else {
		$user_sql = mysqli_query($link, "SELECT * FROM users WHERE id=$user_id" );
		while ($user = mysqli_fetch_assoc($user_sql)) {
			return $user;	
		}
	}
}

?>