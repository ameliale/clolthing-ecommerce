<?php

require_once  'login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

if(isset($_POST['delete']))
{
	$vendorID = $_POST['vendorID'];

	$query = "DELETE FROM vendor WHERE vendorID='$vendorID' ";
	
	$result = $conn->query($query); 
	if(!$result) die($conn->error);
	
	header("Location: vendors.php");
	
}


?>