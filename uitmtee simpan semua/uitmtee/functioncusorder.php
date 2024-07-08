<?php 
require_once 'dbconnect.php';
function displayordercus(){
	global $connect;
	$query = "select * from order_customer";
	$result= mysqli_query($connect,$query);
	return $result;
}
?>