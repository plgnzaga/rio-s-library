<?php $username = $_SESSION['firstname']." ".$_SESSION['surname']; ?>
<div class="wrapper profile">
		<img src="css/images/profilelogo.png" class="img-responsive profilelogo">

				<span><?php echo "<h4>".$username."</h4>"; ?></span>
				<span><?php if($_SESSION['privelege']=="0"){
							echo "<em><span>Borrower</span></em>";
						}
						else{
							echo "<em><span>Admin</span></em>";
						}  
					  ?>
			     </span>
				<span>User ID:<?php echo $_SESSION['user_id']; ?></span>
				<span>Email:<?php echo $_SESSION['email']; ?></span>
				<a href="myprofile.php">Go Back</a>
		</div>
	<div class="wrapper" style="padding:0;">
		<hr>
	</div>