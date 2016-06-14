<?php
	include 'php/html_head.php';
	include 'php/header_logged.php';
	include 'php/_functions/get_requests.php';
?>
<body>
<!-- PAGE CONTENT -->


	<article class="page_content" id="add-request">
		<h1>Ajouter une requête</h1>
		<form action="php/_functions/insert_request.php" method="post">
			<input type="text" name="title" id="title" placeholder="Titre"></input>
			<input type="text" name="image" id="image" placeholder="Image"></input>
			<textarea name="description" id="description" placeholder="Description"></textarea>
			<input type="text" name="deadline" id="deadline" placeholder="Deadline"></input>
			<input type="submit" name="add_request" id="add_request" value="Ajouter"></input>
		</form>
		

	</article>


<!-- END PAGE CONTENT -->
<?php
	include 'php/footer.php';
	include 'php/scripts_calls.php';
?>
</body>
</html>