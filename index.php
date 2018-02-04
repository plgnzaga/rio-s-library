 <?php 
include_once("includes/crud.php");
include("includes/mainnavs.php");
session_start();
if(isset($_SESSION['user_id'])){
	header("location:myprofile.php");
}
else{
	
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign in | Create Account!</title>
</head>
<body style="background-color: #232323;">

	<div class="wrapper accounts">

		<section>
			<p>Sign In:</p>

			<form method="POST" name="sign_in" >
				<p>Email Address: </p>
				<input type="email" class="form-control" name="email" placeholder="E-mail">
				<p>Password: </p>
				<input type="password" class="form-control" name="password" placeholder="Password">
				<span id="error"></span><br>
				<input type="submit" class="btn btn-success" name="sign_in" value="Sign In">
			</form>

		</section>
		<hr>
		<section>
			
			<p>Sign Up:</p>

			<form method="POST" name="" action="sign_up.php">
				<p>Email Address: <span class="required">*</span> </p>
				<input type="email" class="form-control" name="email" placeholder="E-mail" ng-required="true">
				<p>Password: <span class="required">*</span> </p>
				<input type="password" class="form-control" name="password" placeholder="Password" ng-required="true">
				<p>Surname: <span class="required">*</span> </p>
				<input type="text" class="form-control" name="surname" placeholder="Surname" ng-required="true">
				<p>Middlename: <span class="required">*</span> </p>
				<input type="text" class="form-control" name="middlename" placeholder="Middlename">
				<p>Firstname: <span class="required">*</span> </p>
				<input type="text" class="form-control" name="firstname" placeholder="Firstname" ng-required="true">

				<input type="submit" class="btn btn-primary" name="sign_up" value="Sign Up">
			</form>

		</section>
</div><!--end wrapper-->
	
<?php 
$user = new Crud();
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
</body>
</html>