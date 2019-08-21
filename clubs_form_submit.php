<?php include_once 'connection.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add a new user to database</title>
    </head>
    <body>
        <?php
        include("connection.php");

        //concatinating present address
        $address = $_POST[house_no].", ".$_POST[location].", ".$_POST[street].", ".$_POST[thana].", ".$_POST[district].", ".$_POST[post];
        
        $sql = "INSERT INTO club_registration (cname, ce_date, st_date, en_date, address, president_name)
				VALUES ('$_POST[cname]','$_POST[ce_date]','$_POST[st_date]','$_POST[en_date]','$address','$_POST[president_name]')";

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
