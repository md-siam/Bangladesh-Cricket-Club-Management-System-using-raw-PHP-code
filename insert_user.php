<?php include_once 'connection.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add a new user to database</title>
    </head>
    <body>
        <?php
        include("connection.php");

        
        $sql = "INSERT INTO users (username, email, password)
				VALUES ('$_POST[username]','$_POST[email]','$_POST[userpass]')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully<br><br>";
        } else {
            echo "Error: " . $sql . "<br><br>" . $conn->error;
        }

        $conn->close();
        ?>
        <?php
        header("Location:home.php");
        ?>
    </body>
</html>
