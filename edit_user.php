<?php
	include("connection.php");
	$id = $_GET['id'];
	$sql = "SELECT username, email FROM users where id =$id";
	$result = $conn->query($sql);

	$username="";
	$email="";

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	   		$name = $row['username'];
	   		$email = $row['email'];
	    }
	} else {
	    //echo "0 results";
	}
	$conn->close();
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
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <title>Edit User</title>


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
                        <h2>Update the user's Information</h2>
                        <h5>Welcome Md. Siam , Love to see you back. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <form action="update.php" method="POST">
                    <table>
                        <caption>Simple Data Insertion in Database</caption>
                        <tr>
                            <td>Name: </td>
                            <td><input type="text" name="username" value="<?php echo " $name" ?>" > </td>
                        </tr>
                        <tr>
                            <td>Email: </td>
                            <td><input type="email" name="email" value="<?php echo " $email"?>"></td>
                        </tr>
                        <tr>
                            <td><input type="hidden" name="id" value="<?php echo " $id"?>"></td>
                            <td><input type="submit" name="submit" value="update"></td>
                        </tr>

                    </table>


                </form>
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
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

</body>

</html>