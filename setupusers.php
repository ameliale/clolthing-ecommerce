<?php

require_once 'login.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

$role = 'admin';
$first_name = 'Dave';
$last_name = 'Hyde';
$username = 'dhyde';
$password = 'password123';
$token = password_hash($password, PASSWORD_DEFAULT);

add_user($conn, $role, $first_name, $last_name, $username, $token);

function add_user($conn, $role, $first_name, $last_name, $username, $token){
	//code to add user here
	$query = "insert into user(role, first_name, last_name, username, password) values ('$role', '$first_name', '$last_name', '$username', '$token')";
	$result = $conn->query($query);
	if(!$result) die($conn->error);
}

?>