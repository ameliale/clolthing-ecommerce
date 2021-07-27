<?php

require_once  'login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

if(isset($_POST['delete']))
{
	$prodID = $_POST['prodID'];

	$query1 = "DELETE FROM product WHERE prodID='$prodID' ";
	$query2 = "DELETE FROM inventory WHERE prodID='$prodID' ";
	
	$result1 = $conn->query($query1); 
	if(!$result1) die($conn->error);
	
	$result2 = $conn->query($query2); 
	if(!$result2) die($conn->error);
	
	header("Location: inventory.php");
	
}


?>