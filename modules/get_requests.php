<?php

include 'db_connect.php';

function get_requests(){
	$link=db_connect();
	if (! $link) {
		//echo "could not connect";
	}
	else {
		$requests = mysql_query( "SELECT * FROM requests ORDER BY created_at Desc", $link );

		if (! $requests) {
			die('Could not get requests: ' . mysql_error());
		}
		else {
			return $requests;
		}
	}
}

?>