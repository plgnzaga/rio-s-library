<?php
error_reporting(1);
session_start();
include_once("includes/crud.php");	
include("includes/mainnavs.php");
$other_sections = new Crud();
$sections = "SELECT DISTINCT section FROM books";
$sections_res = $other_sections->getData($sections);
$genre = "SELECT DISTINCT genre FROM books";
$genre_res = $other_sections->getData($genre);

$message = "";
if(isset($_POST['title_authors'])){
		$showbook = new Crud();
		$search_book = $_POST['search'];
		if($search_book==""){
			$message = "Please input something in the field.";
		}	
		else{
			if($_SESSION['privelege']=="1"){
				$query = "SELECT * FROM books WHERE title LIKE '%$search_book%' OR author 
				LIKE '%$search_book%'   ORDER BY index_no DESC";
			}
			else{
				$query = "SELECT * FROM books WHERE status = '0' AND (title LIKE '%$search_book%' OR author LIKE '%$search_book%') ORDER BY index_no DESC";
			}
		
		$result = $showbook->getData($query);
			if($result){
				$message = 'Search Results for "<em>'.$search_book.'</em>" ';
			}
			else{
				$message = 'No Results found for "<em>'.$search_book.'</em>" ';
			}
		}
}
if(isset($_POST['categ'])){
	$category = new Crud();
	$section = $_POST['category'];

	if($section==""){
		echo "";
	}
	else{
		$categoryQ = "SELECT * FROM books WHERE status = '0' AND ( genre 
		LIKE '%$section%' OR section LIKE '%$section%') ORDER BY index_no DESC";
		$categoryResult = $category->getData($categoryQ);
		if($categoryResult){
				$message = 'Search Results for "<em>'.$section.'</em>" ';
			}
			else{
				$message = 'No Results found for "<em>'.$section.'</em>" ';
			}
	}

}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="background-color: #232323;">
<div class="wrapper search">
	<h4><?php echo "Hi ".$_SESSION['firstname']."!"; ?></h4>
		<div>
			<?php 
			if($_SESSION['privelege']=="1"){
				echo $_SESSION['privelege']; }
				else{
					echo "Wala"; }?>
			<form method="POST">
			<label>Search Here:</label> <span>Title/Authors</span>
			<input type="text" name="search" placeholder="Search for Books and Authors" />

			<button type="submit" class="btn btn-success" name="title_authors"><i class="fa fa-search"></i></button>
			</form>
		</div>

		<div>
			<form method="POST">
				<label>Search by Category:</label>
				<select name="category">
					<option></option>
					<optgroup label="Genres">
					<?php
						foreach ($genre_res as $key => $row) { ?>
							<option><?php echo $row['genre']; ?></option>
					<?php }
					?>
					</optgroup>
					<optgroup label="Sections">

					<?php
						foreach($sections_res as $key => $row){ ?>
							<option><?php echo $row['section']; ?></option>
					<?php } ?>
					</optgroup>
				</select>
				<button type="submit" class="btn btn-success" name="categ"><i class="fa fa-search"></i></button>
			</form>
		</div>
</div>


<div class="wrapper results">
		<div class="results">
			<?php
				echo "<span class='message'>".$message."</span>";
				foreach($result as $key => $res){ ?>
				<section class="book-box">
					<form method="POST" name="" action="borrow.php">
					<div class="book-box">
						<?php echo "<img class='img-responsive' src='temp/".$res['cover']."'>"; ?>
					</div>
					<div class="book-box">
						<h4><?php echo $res['title']."<br>"; ?></h4>
						<h5><?php echo $res['author']."<br>"; ?></h5>
						<em><h5><?php echo $res['genre']."<br>"; ?></h5></em>
						<em><h5><?php echo $res['section']."<br>"; ?></h5></em>
						<?php 
						
							if(isset($_SESSION['user_id'])){
								if($_SESSION['privelege']=="1"){
									if($res['status']=="1"){
										?>
										<section class="unavailable">Checked Out</section>
										<?php
									}
									else{
										?>
										<section class="available">Available</section>
										<?php
									}
								}
								else{
									?>
									<input type="hidden" class="btn btn-md btn-success" name="index_no" value="<?php echo $res['index_no']; ?>" />
									<input type="submit" class="btn btn-md btn-success" name="borrow" value="Borrow" />
								<?php
								}
								/**/
							}
							else{
								?>
									<a href="accounts.php"><button type="button" class="btn btn-success">Borrow</button></a>

								<?php

							}
						?>
					</div>
				</form>
            </section>			
			<?php }
			?>
		</div>

		<div class="results"> 
			<?php
				foreach($categoryResult as $key => $categoryR){ ?>
				<section class="book-box">
					<form method="POST" action="borrow.php">
						<div>
						<?php echo "<img class='img-responsive' src='temp/".$categoryR['cover']."'>"; ?>
						</div>
						<div>
						<h4><?php echo $categoryR['title']."<br>"; ?></h4>
						<h5><?php echo $categoryR['author']."<br>"; ?></h5>
						<em><h5><?php echo $categoryR['genre']."<br>"; ?></h5></em>
						<em><h5><?php echo $categoryR['section']."<br>"; ?></h5></em>
						<?php 
						
							if(isset($_SESSION['user_id'])){
								if($_SESSION['privelege']=="1"){
									if($categoryR['status']=="1"){
										echo "Borrowed";
									}
									else{
										echo "Available";
									}
								}
								else{
									?>
									<input type="hidden" class="btn btn-md btn-success" name="index_no" value="<?php echo $categoryR['index_no']; ?>" />
									<input type="submit" class="btn btn-md btn-success" name="borrow" value="Borrow" />
								<?php
								}
								/**/
							}
							else{
								?>
									<a href="accounts.php"><button type="button" class="btn btn-success">Borrow</button></a>

								<?php

							}
						?>
						</div>
						</form>
				</section>
				
			<?php	}
				 ?>
		</div>


		<div class="back">
			<a href="myprofile.php"><button type="button" class="btn btn-primary">Go Back to Profile</button></a>
		</div>

</div>
</body>
</html>
