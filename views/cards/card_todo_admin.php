<div class="card-wrapper">
	<!-- LEFT -->
	<div>
		<span class="state">À Faire <?php if($current_user_type=='admin'){ echo "(moi)"; } ?></span>
		<?php include 'card_left.php'; ?>
<!-- RIGHT
--><div>
		<div>
			<?php
				if($current_user_type=='admin'){
					echo "
						<p class='item-subtitle'>Ne laissons pas le Syndic nous facturer 5 fois plus cher !</p>
						<button type='submit' value='Submit' class='submit'>
							<i class='fa fa-check' aria-hidden='true'></i>
						</button>
						<button type='submit' value='Submit' class='cancel'>
							<i class='fa fa-times' aria-hidden='true'></i>
						</button>
						<a href='#go_to_syndic'>Envoyer au Syndic</a>
					";
				}
				elseif($current_user_type=='normal'){
					echo "
						<p class='item-subtitle'>Ne laissons pas le Syndic nous facturer 5 fois plus cher !</p>
						<i class='fa fa-paper-plane' aria-hidden='true'></i>
						<h5 class='title'>Attribuée au Conseil Syndical</h5>
					";
				}
			?>
		</div>
	</div>
</div>