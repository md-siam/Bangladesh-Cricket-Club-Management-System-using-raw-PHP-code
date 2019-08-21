<?php include_once 'connection.php'; ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contract Form Submit</title>
    </head>
    <body>
        <?php
        include("connection.php");

        
        $sql = "INSERT INTO contract_form (cid, cname, fname, mname, lname, pid, aut_fname, aut_mname, aut_lname, designation, c_start_date, c_end_date, amount, pay_serial, pay_due, pay_actual, pay_amount )
				VALUES ('$_POST[cid]','$_POST[cname]','$_POST[fname]','$_POST[mname]','$_POST[lname]','$_POST[pid]','$_POST[aut_fname]','$_POST[aut_mname]','$_POST[aut_lname]','$_POST[designation]','$_POST[c_start_date]','$_POST[c_end_date]','$_POST[amount]','$_POST[pay_serial]','$_POST[pay_due]','$_POST[pay_actual]','$_POST[pay_amount]')";

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
