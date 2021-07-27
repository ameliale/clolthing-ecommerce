<?php

$page_roles = array('admin');

require_once 'login.php';
require_once 'check-session.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

if(isset($_POST['delete']))
{
	$username = $_POST['username'];

	$query = "DELETE FROM user WHERE username='$username' ";
	
	$result = $conn->query($query); 
	if(!$result) die($conn->error);
	
	header("Location: customer-list.php");
	
}

?>