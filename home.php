<?php include_once 'connection.php'; ?>
<?php session_start(); ?>

<?php

    if(!$_SESSION['login']){
        
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bangladesh Cricket Club</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">BD Cricket Club</a>
            </div>
            <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 05 September 2018 &nbsp; <a href="index.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="assets/img/find_user.png" class="user-image img-responsive" />
                    </li>


                    <li>
                        <a class="active-menu" href="home.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-admin fa-3x"></i> Players<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="players_form.php">Add a new player</a>
                            </li>
                            <li>
                                <a href="performance_form.php">Performance in Match Form</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-admin fa-3x"></i> Contracts<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="contracts_form.php">Contract Form for new player</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-admin fa-3x"></i> Clubs<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="clubs_form.php">Registration Form</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-admin fa-3x"></i> Events<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="event_form.php">Event Form</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-admin fa-3x"></i> Teams<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="team_form.php">Team Form</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-admin fa-3x"></i> Users<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="new_user.php">New User Form</a>
                            </li>
                            <li>
                                <a href="delete_user.php">Delete/Edit a User</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-admin fa-3x"></i> Search<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="search_player.php">Player</a>
                            </li>
                            <li>
                                <a href="search_team.php">Team</a>
                            </li>
                            <li>
                                <a href="search_event.php">Event</a>
                            </li>

                        </ul>
                    </li>

                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Admin Dashboard</h2>
                        <h5>Welcome Md. Siam, Love to see you back. </h5>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="panel panel-back noti-box">
                            <span class="icon-box bg-color-red set-icon">
                                <i class="fa fa-users"></i>
                            </span>
                            <div class="text-box">
                              <p class="main-text">
                               <?php
                                    $sqlTmess = "SELECT count(pid) AS total FROM players;";
                                    $resultT = mysqli_query($conn, $sqlTmess);
                                    $values = mysqli_fetch_assoc($resultT);
                                    $num_rows = $values['total'];
                                    echo $num_rows;
                                    ?> Total</p>
                                <p class="text-muted">Players</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="panel panel-back noti-box">
                            <span class="icon-box bg-color-green set-icon">
                                <i class="fa fa-hospital-o"></i>
                            </span>
                            <div class="text-box">
                                <p class="main-text">30 Injured</p>
                                <p class="text-muted">Players</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="panel panel-back noti-box">
                            <span class="icon-box bg-color-blue set-icon">
                                <i class="fa fa-bell-o"></i>
                            </span>
                            <div class="text-box">
                                <p class="main-text">
                                <?php
                                    $sqlTmess = "SELECT count(eid) AS total FROM event_form;";
                                    $resultT = mysqli_query($conn, $sqlTmess);
                                    $values = mysqli_fetch_assoc($resultT);
                                    $num_rows = $values['total'];
                                    echo $num_rows;
                                    ?> Pending</p>
                                <p class="text-muted">Events</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">
                        <div class="panel panel-back noti-box">
                            <span class="icon-box bg-color-brown set-icon">
                                <i class="fa fa-globe"></i>
                            </span>
                            <div class="text-box">
                                <p class="main-text">3 Global</p>
                                <p class="text-muted">Matches</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr />
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-9 col-sm-12 col-xs-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <center>
                                    <h3>Upcoming Events</h3>
                                </center>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th><center>Event Id</center></th>
                                                <th><center>Location</center></th>
                                                <th><center>Start date</center></th>
                                                <th><center>End date</center></th>
                                                <th><center>Delete</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
			                                 include("connection.php");
			                                 $sql = "SELECT eid, location, start_date, end_date FROM event_form";
			                                 $result = $conn->query($sql);

			                                 if ($result->num_rows > 0) {
                                                    // output data of each row
			                                     while($row = $result->fetch_assoc()) {
			    	                                echo "<tr>";		    	
                                                        echo "<td>" . $row['eid']. "</td>";
				    	                                echo "<td>" . $row['location']. "</td>";
                                                        echo "<td><center>" . $row['start_date']. "</center></td>";
                                                        echo "<td><center>" . $row['end_date']. "</center></td>";
                                                        echo "<td><center><a href=delete_event.php?eid=".$row['eid'].">Delete</a></center></td>";
			    	                                echo "</tr>";
			     
                                                 }
			                                 } else {
			                                 //echo "0 results";
			                                 }
			                                 $conn->close();
		                                  ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12 ">
                        <div class="panel panel-back noti-box">
                            <iframe src="https://calendar.google.com/calendar/embed?height=200&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=j6tnu8fmbgtm6hnq8at0rf04t4%40group.calendar.google.com&amp;color=%23333333&amp;ctz=Asia%2FDhaka" style="border-width:0" width="100%" height="280px" frameborder="0" scrolling="no"></iframe>
                        </div>

                    </div>

                </div>
                <!-- /. ROW  -->
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- MORRIS CHART SCRIPTS -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>

</html>