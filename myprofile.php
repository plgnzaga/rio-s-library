<?php
error_reporting(1);
session_start();
include_once("includes/crud.php");


if(isset($_SESSION['user_id'])){
	include("includes/profile.php");
}
else{
	header("location:index.php");
}
	
?>
