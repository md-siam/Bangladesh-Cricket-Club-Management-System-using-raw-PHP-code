<?php
	include("connection.php");
	$id = $_GET['id'];
	$sql = "DELETE FROM users WHERE id=$id";
	$result = $conn->query($sql);
	
	header("Location:delete_user.php");

?>