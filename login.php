<?php

include_once 'connection.php';

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

//get user details from user table
$sql = "SELECT * FROM users;";
$result = mysqli_query($conn, $sql);

//Check database results
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
//Spitting out data as lonhg as we are in the database
    while ($row = mysqli_fetch_assoc($result)) {
        $namedb = $row['username'];
        $passdb = $row['password'];
    }
}
//End of checking

if (isset($username) && isset($password)) {

    if (!empty($username) && !empty($password)) {

        if (strcmp($username, $namedb) == 0 && strcmp($password, $passdb) == 0) {
            $_SESSION['login'] = true;
            header("Location: home.php");
        } else {
            //for wrong input re-direct to home page
            echo $namedb;
            echo $passdb;
            header("Location: ../bangladesh_cc/index.php");
        }
    }
}
