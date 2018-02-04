<?php
include_once("includes/crud.php");
error_reporting(1);
session_start();
		$book_status = new Crud();
		$borrowed_query = "SELECT title,author,borrowed_by FROM books WHERE status = '1' ";
		$borrowed_result = $book_status->getData($borrowed_query);

		$available_query = "SELECT title,author FROM books WHERE status = '0' ";
		$available_result = $book_status->getData($available_query);

include_once("includes/crud.php");
if(isset($_SESSION['user_id'])){	
}
else{
	header("location:index.php");
}	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Book Status</title>
</head>
<?php include("includes/mainnavs.php");?>	
<body style="background-color: #232323;">
	<?php include("includes/profile-info.php");?>
	<div class="wrapper borrowed">
		<h4>List of Borrowed Books</h4>
		<?php
		foreach ($borrowed_result as $key => $stat) {
			echo "<span class='title'>".$stat['title']." by ";
			echo $stat['author']." </span><em>borrowed by ";
			echo $stat['borrowed_by']."</em><br>";
		}

	?>
	</div>
	<div class="wrapper">
		<hr>
	</div>
	<div class="wrapper unborrowed">
		<h4>List of Available Books</h4>
		<?php
		foreach ($available_result as $key => $stat) {
			echo "<span class='title'>".$stat['title']."</span> by ";
			echo $stat['author']."<br>";
			
		}

	?>

	</div>
</body>
</html>