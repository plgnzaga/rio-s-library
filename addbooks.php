<?php
error_reporting(1);
session_start();
include_once("includes/crud.php");
if(isset($_SESSION['user_id'])){
	$username = $_SESSION['firstname']." ".$_SESSION['surname'];
}
else{
  header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Books</title>
</head>
<?php include("includes/mainnavs.php");?>
<body style="background-color: #232323;">
		<?php include("includes/profile-info.php");?>
	<div class="wrapper add_books">
		<h3>Add Books</h3>
		<form method="POST" enctype="multipart/form-data">
		<input type="text" class="form-control" name="index_no" placeholder="index_no" />
		<input type="text" class="form-control" name="title" placeholder="title" />
		<input type="text" class="form-control" name="author" placeholder="author" />
		<input type="text" class="form-control" name="genre" placeholder="genre" />
		<input type="text" class="form-control" name="section" placeholder="section" />
		<input type="file" name="image" />
		<input type="submit" class="btn btn-success" name="add_book" value="Add Book" />
		<a href="myprofile.php"><input type="button" class="btn btn-primary" name="" value="Go Back" /></a>
		</form>	
	</div>
</body>
<?php 

$privelege = $_SESSION['privelege'];

if($privelege=='1'){
	
}
else{
	if(isset($_SESSION['user_id'])){
		header("location:myprofile.php");
	}
	else{
		header("location:index.php");
	}
	
}
?>

<?php
$add = new Crud();
	if(isset($_POST['add_book'])){
		$target = "temp/".basename($_FILES['image']['name']);

		$image = $_FILES['image']['name'];
		$index_no = $add->sanitize($_POST['index_no']);
		$title = $add->sanitize($_POST['title']);
		$author = $add->sanitize($_POST['author']);
		$genre = $add->sanitize($_POST['genre']);
		$section = $add->sanitize($_POST['section']);

		if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
			$result = $add->execute("INSERT INTO books(index_no,title,author,cover,genre,section)
				  VALUES('$index_no','$title','$author','$image','$genre','$section')");
		}
		else{
			$result = $add->execute("INSERT INTO books(index_no,title,author,cover,genre,section)
				  VALUES('$index_no','$title','$author','default.png','$genre','$section')");
 
		}
	}
?>
</html>
