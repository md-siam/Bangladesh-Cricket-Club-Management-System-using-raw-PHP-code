<?php include_once 'connection.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add a new players to database</title>
    </head>
    <body>
        <?php
        include("connection.php");
        
        //concatinating present address
        $present_address = $_POST[pr_house_no].", ".$_POST[pr_location].", ".$_POST[pr_street].", ".$_POST[pr_thana].", ".$_POST[pr_district].", ".$_POST[pr_post];
        
        //concatinating permanent address
        $permanent_address = $_POST[pe_house_no].", ".$_POST[pe_location].", ".$_POST[pe_street].", ".$_POST[pe_thana].", ".$_POST[pe_district].", ".$_POST[pe_post];
            
        //Insert into players table
        $sql_1 = "INSERT INTO players (fname, mname, lname, father_name, mother_name, present_address, permanent_address, date_of_birth, membership, submission_date)
				VALUES ('$_POST[fname]','$_POST[mname]','$_POST[lname]','$_POST[father_name]','$_POST[mother_name]', '$present_address','$permanent_address','$_POST[date_of_birth]','$_POST[membership]','$_POST[submission_date]')";

        if ($conn->query($sql_1) === TRUE) {
            echo "New player added successfully<br><br>";
        } else {
            echo "Error: " . $sql_1 . "<br><br>" . $conn->error;
        }
        
        
        //Insert into previous_history table
        $sql_2 = "INSERT INTO previous_history (cname, pc_from, pc_to, total_runs, total_wickets, team_leader)
				VALUES ('$_POST[pcname]','$_POST[pc_from]','$_POST[pc_to]','$_POST[total_runs]','$_POST[total_wickets]', '$_POST[team_leader]')";

        if ($conn->query($sql_2) === TRUE) {
            echo " with previous history<br><br>";
        } else {
            echo "Error: " . $sql_2 . "<br><br>" . $conn->error;
        }
        
        
        //Insert into best_performance table
        $sql_3 = "INSERT INTO best_performance (cname, oppo_cname, eid, mid, runs, wicket)
				VALUES ('$_POST[cname]','$_POST[oppo_cname]','$_POST[eid]','$_POST[mid]','$_POST[runs]', '$_POST[wicket]')";

        if ($conn->query($sql_3) === TRUE) {
            echo " with best performance<br><br>";
        } else {
            echo "Error: " . $sql_3 . "<br><br>" . $conn->error;
        }
        
        
        //Insert into degree table
        $sql_4 = "INSERT INTO degree (dname, institution, board, year, result)
				VALUES ('$_POST[dname]','$_POST[institution]','$_POST[board]','$_POST[year]','$_POST[result]')";

        if ($conn->query($sql_4) === TRUE) {
            echo "New player added successfully<br><br>";
        } else {
            echo "Error: " . $sql_4 . "<br><br>" . $conn->error;
        }
        
        $conn->close();
        ?>
        <?php
        header("Location:home.php");
        ?>
    </body>
</html>