<?php
    $servername = "sql310.epizy.com";
    $username = "epiz_22663396";
    $password = "5RrlSBdyebAwj";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);

    mysqli_select_db($conn,"epiz_22663396_bd_cc");

    // Check connection
    if (!$conn) {
       die("Connection failed: <br><br>" . mysqli_connect_error());
    }
    //echo "Connected successfully <br><br>";