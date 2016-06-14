<?php
	include 'php/html_head.php';
	include 'php/header_logged.php';
	include 'php/_functions/get_requests.php';
?>
<body>
<!-- PAGE CONTENT -->


	<article class="page_content" id="circle">
		<h1>Nom du cercle</h1>
		<h2>Requêtes</h2>
		<section class="requests">
			<a class="button-add-request" href="add_request.php">+ Ajouter une requête +</a>
			<?php		
				$requests=get_requests();
				while($req = mysql_fetch_array( $requests )) {
					echo "
						<div class='request'>
							<img src=' ".$req['image_url']." ' />
							<p class='request-title'>".$req['title']."</p>
							<p class='request-created'>Créée le : ".$req['created_at']."</p> 
							<p class='request-deadline'>Deadline : ".$req['deadline']."</p> 
							<p class='request-desc'>".$req['description']."</p> 
							<br/><br/>
						</div>
					";
				}
			?>
		</section>

	</article>


<!-- END PAGE CONTENT -->
<?php
	include 'php/footer.php';
	include 'php/scripts_calls.php';
?>
</body>
</html>