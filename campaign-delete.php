<?php

require_once  'login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

if(isset($_POST['delete']))
{
	$campID = $_POST['campID'];

	$query = "DELETE FROM campaign WHERE campID='$campID' ";
	
	$result = $conn->query($query); 
	if(!$result) die($conn->error);
	
	header("Location: campaign.php");
	
}


?>