<?php include_once 'connection.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Team Formation</title>
    </head>
    <body>
        <?php
        include("connection.php");

        
        $sql = "INSERT INTO team_formation (date_of_formation, team_leader, player1, player2, player3, player4, player5, player6, player7, player8, player9, player10, player11, player12, player13, player14, player15)
				VALUES ('$_POST[date_of_formation]','$_POST[team_leader]','$_POST[player1]','$_POST[player2]','$_POST[player3]','$_POST[player4]','$_POST[player5]','$_POST[player6]','$_POST[player7]','$_POST[player8]','$_POST[player9]','$_POST[player10]','$_POST[player11]','$_POST[player12]','$_POST[player13]','$_POST[player14]','$_POST[player15]')";

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
