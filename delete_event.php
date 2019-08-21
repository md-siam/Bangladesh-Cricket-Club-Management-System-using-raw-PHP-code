<?php
	include("connection.php");
	$id = $_GET['eid'];
	$sql = "DELETE FROM event_form WHERE eid=$id";
	$result = $conn->query($sql);
	
	header("Location:home.php");

?>