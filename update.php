<?php
	include("connection.php");

	$id = $_POST['id'];
	$name = $_POST['username'];
	$email = $_POST['email'];

	//echo "$id";

	
	$sql = "UPDATE users SET username = '$name' , email = '$email' WHERE id= $id;";
	//$result = $conn->query($sql);

	if ($conn->query($sql) === TRUE) {
			echo "record updated successfully<br><br>";
		} 
	else {
			echo "Error: " . $sql . "<br><br>" . $conn->error;
		}
	
	header("Location:delete_user.php");

?>
