<div class="card-wrapper">
	<!-- LEFT -->
	<div>
		<span class="state">À Faire</span>
		<?php include 'card_left.php'; ?>
<!-- RIGHT
	-->
	<div>
		<div>
			<?php
				if($current_user_type=='normal'){
				echo "
					<p class='item-subtitle'>Ne laissons pas le Syndic nous facturer 5 fois plus cher !</p>
					<button type='submit' value='Submit'>
						<i class='fa fa-thumbs-up' aria-hidden='true'></i>
						Je prends
					</button>
					";
				}
				elseif($current_user_type=='admin'){
				echo "
					<p class='item-subtitle'>Ne laissons pas le Syndic nous facturer 5 fois plus cher !</p>
					<button type='submit' value='Submit'>
						<i class='fa fa-thumbs-up' aria-hidden='true'></i>
						Je prends
					</button>
					<a href='#go_to_syndic'>Envoyer au Syndic</a>
					";
				}
			?>
		</div>
	</div>
</div>