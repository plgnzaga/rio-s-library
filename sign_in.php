<?php 
include_once("includes/crud.php");
include("includes/mainnavs.php");
$user = new Crud();
session_start();

if(isset($_POST['sign_in'])){

	$email = $user->sanitize($_POST['email']);
	$password = $user->sanitize($_POST['password']);
	$sign_in = $user->login($email,$password);

	if($sign_in){
		header("location:myprofile.php");
	}
	else{
		?>
		<script>
			$("span#error").html("Invalid Username or Password");
			
		</script>
		<?php
	}
}

?>
