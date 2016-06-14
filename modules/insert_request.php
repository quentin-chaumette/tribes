<?php

include 'db_connect.php';

if(isset($_POST['add_request'])){
	$link=db_connect();
	if (! $link) {
		echo "could not connect";
	}
	else {
		$title=$_POST['title'];
		$description = htmlspecialchars($_POST['description'], ENT_QUOTES);
		
		$insertion = mysql_query( "INSERT INTO requests (title,description) VALUES ('$title','$description') ", $link );
	}

	header ('location: ../views/dashboard.php'); // redirection 
			
	}

?>