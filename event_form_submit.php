<?php include_once 'connection.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add a new Event</title>
    </head>
    <body>
        <?php
        include("connection.php");

        
        $sql = "INSERT INTO event_form (location, start_date, end_date, vname, seat_capacity, match_date, mid, mdate, team_bat, team_bowl)
				VALUES ('$_POST[location]','$_POST[start_date]','$_POST[end_date]','$_POST[vname]','$_POST[seat_capacity]','$_POST[match_date]','$_POST[mid]','$_POST[mdate]','$_POST[team_bat]','$_POST[team_bowl]')";

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
