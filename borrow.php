 <?php
include_once("includes/crud.php");
session_start();
if(isset($_POST['borrow'])) {    
	$borrow = new Crud();
    $name = $_SESSION['firstname']." ".$_SESSION['surname'];
    $index_num = $borrow->sanitize($_POST['index_no']);
    $result = $borrow->execute("UPDATE books SET status = '1', borrowed_by = '$name' WHERE index_no='$index_num' ");

       header("location:search_book.php");
   
}

?>