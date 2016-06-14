<?php
	include 'php/html_head.php';
	include 'php/header_logged.php';
	include 'php/_functions/get_circles.php';
?>
<body>
<!-- PAGE CONTENT -->


	<article class="page_content" id="dashboard">
		<h1>Dashboard</h1>
		<h2>Mes Cercles</h2>
		<section class="circles">
			<a class="button-add-circle" href="add_circle.php">+ Créer un cercle +</a>
			<?php		
				$circles=get_circles();
				while($circle = mysql_fetch_array( $circles )) {
					echo "
						<a href='circle.php'>
							<div class='circle'>
								<img src=' ".$circle['image_url']." ' />
								<p class='circle-title'>".$circle['title']."</p>
								<p class='circle-subtitle'>".$circle['subtitle']."</p>
							</div>
						</a>
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