<html>
<head>
    <title>Add Data</title>
</head>
 
<body>
<?php

include_once("includes/crud.php");

$register = new Crud();

if(isset($_POST['sign_up'])) {    
    $password = $register->sanitize($_POST['password']);
    $password = md5($password);
    $surname = $register->sanitize($_POST['surname']);
    $middlename = $register->sanitize($_POST['middlename']);
    $firstname = $register->sanitize($_POST['firstname']);
    $email = $register->sanitize($_POST['email']);

    $result = $register->execute("INSERT INTO users(password,surname,middlename,firstname,email) VALUES('$password','$surname','$middlename','$firstname','$email')");
    header("location:index.php");
}
?>
</body>
</html>