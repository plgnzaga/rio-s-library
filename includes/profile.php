		<?php
		$username = $_SESSION['firstname']." ".$_SESSION['surname'];
		$mybooks = new Crud();
		$query = "SELECT * FROM books WHERE borrowed_by = '$username' ";
		
		$result = $mybooks->getData($query);
		
		?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>My Account</title>
		</head>
			<?php include'includes/mainnavs.php';?>
		<body style="background-color: #232323;">
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
				
				<hr>
				<?php if($_SESSION['privelege']=="0"){ ?>
				<section><a href="borrowed.php"><input type="button" value="View Borrowed Books" /></a></section>
				<section><a href="search_book.php"><input type="button" value="Search Books" /></a></section>
				<?php } ?>
				<?php if($_SESSION['privelege']=="1"){ ?>
				<section><a href="book-status.php"><input id="demo" type="button" value="View Books Status" /></a></section>
				<section><a href="search_book.php"><input type="button" value="Search Books" /></a></section>
				<section><a href="addbooks.php"><input type="button" value="Add Books" /></a></section>
				<?php } 
				?>
				
				
			</div>
		</body>
		</html>
		