 <?php
include_once("includes/crud.php");
if(isset($_GET['return'])) {

	$return = new Crud();
    
	$index_num = $return->sanitize($_GET['index_no']);
    $result = $return->execute("UPDATE books SET status = '0', borrowed_by = '' WHERE index_no='$index_num' ");

     header("location:borrowed.php");
}

?>