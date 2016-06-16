<?php

function get_requests($coprop_id){
	$link=db_connect();
	if (! $link) {
		//echo "could not connect";
	}
	else {
		$requests = mysqli_query($link, "SELECT * FROM requests WHERE coprop_id=$coprop_id ORDER BY created_at Desc" );

		if (! $requests) {
			die('Could not get requests: ' . mysql_error());
		}
		else {
			return $requests;
		}
	}
}

?>