<div class="card-wrapper">
	<!-- LEFT -->
	<div>
		<span class="state">En cours <?php if($current_user_id==$in_charge['id']){ echo "(moi)"; } ?></span>
		<?php include 'card_left.php'; ?>
<!-- RIGHT
--><div>
		<div>
			<p class="item-subtitle">Ne laissons pas le Syndic nous facturer 5 fois plus cher !</p>
			<?php
				if ($current_user_id!=$in_charge['id']){
					echo "<img class='user-img' src='http://lorempixel.com/200/200/cats' alt='' /><h5 class='title'>".$in_charge['firstname']." ".$in_charge['name']."</h5>";
				}
				else{
					echo "<button type='submit' value='Submit' class='submit'>
					<i class='fa fa-check' aria-hidden='true'></i>
					</button>
					<button type='submit' value='Submit' class='cancel'>
					<i class='fa fa-times' aria-hidden='true'></i>
					</button>
					<a href='mailto:mon_syndic@syndic.net'>Envoyer au Conseil Syndical</a>"; 
				}
			?>
		</div>
	</div>
</div>