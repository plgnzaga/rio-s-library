<?php
error_reporting(1);
session_start();
include_once("includes/crud.php");

if(isset($_SESSION['user_id'])){
	include("includes/profile.php");

	?>
	
	<div class="wrapper books">

				<h4>List of Borrowed Books:</h4>
				<?php
					foreach($result as $key => $res){ ?>
					
					<section class="books">
						<form method="GET" action="return.php">
							
							<div>
		 					<?php
		 					echo "<img onerror='this.src='temp/default.png'' class='img-responsive' alt='book.jpg' src='temp/".$res['cover']."'>";
		 					?>
		 					</div>
		 					<div>
		 					<?php
		 					echo "<b>".$res['title']."</b><br>";
                            echo "<i>".$res['author']."</i><br>";
                            echo $res['genre']."<br>";
                            echo $res['section']."<br>";
                           
                            
                            ?>
                            <input type="hidden" name="index_no" value="<?php echo $res['index_no']; ?>" />
                            <input type="submit" name="return" value="Return Book" />
                        	</div>
		 					
						</form>
					</section>
					
				<?php }
				?>

			</div>

			<div class="wrapper return-home">
				<center><a href="myprofile.php"><button type="button" class="btn btn-primary">Go Back.</button></a></center>
			</div>
		<?php
		if(isset($_SESSION['privelege'])=="1"){
			header("loation:myprofile.php");
		}
}
else{
	header("location:index.php");
}
	
?>
