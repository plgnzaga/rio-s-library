<div class="navigation">
	<p>Rio's Library</p>
	<?php
		
		if(isset($_SESSION['user_id'])){
			?>
			<a href="sign_out.php"><button class="btn btn-success">Sign Out</button></a>
			<?php
		}
	?>
</div>