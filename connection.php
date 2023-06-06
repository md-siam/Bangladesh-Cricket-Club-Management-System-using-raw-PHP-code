<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);

    mysqli_select_db($conn,"bd_cc");

    // Check connection
    if (!$conn) {
       die("Connection failed: <br><br>" . mysqli_connect_error());
    }
    //echo "Connected successfully <br><br>";
