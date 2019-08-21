<?php include_once 'connection.php'; ?>
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
                        <a href="home.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
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
                        <h2>Player's Registration Form</h2>
                        <h5>Check once before submitting the form. </h5>

                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="row">
                    <div class="col-md-12">
                        <!-- Form Elements -->
                        <div class="panel panel-default">
                            <div class="panel-heading" style="text-align:center">
                                Fill all the Informations
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                       <!--Actual form start-->
                                        <form action="players_form_submit.php" method="POST" onsubmit="return confirm('A new player is added successfully..!!');">
                                            <div class="col-md-4 form-group">
                                                <label>First Name</label>
                                                <input name="fname" class="form-control" />
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label>Middle Name</label>
                                                <input name="mname" class="form-control" />
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label>Last Name</label>
                                                <input name="lname" class="form-control" />
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label>Father's Name</label>
                                                <input name="father_name" class="form-control" />
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label>Mother's Name</label>
                                                <input name="mother_name" class="form-control" />
                                            </div>

                                            <div class="col-md-12 form-group">
                                                <label><br />Present Address: </label></div>
                                            <div class="col-md-12 form-group">
                                                <div class="col-md-4 form-group">
                                                    <label>House No.</label>
                                                    <input name="pr_house_no" class="form-control" />
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label>Location</label>
                                                    <input name="pr_location" class="form-control" />
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label>Village/Street</label>
                                                    <input name="pr_street" class="form-control" />
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label>Thana</label>
                                                    <input name="pr_thana" class="form-control" />
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label>District</label>
                                                    <input name="pr_district" class="form-control" />
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label>Post code</label>
                                                    <input name="pr_post" class="form-control" />
                                                </div>
                                            </div>

                                            <div class="col-md-12 form-group">
                                                <label><br />Permanent Address: </label></div>
                                            <div class="col-md-12 form-group">
                                                <div class="col-md-4 form-group">
                                                    <label>House No.</label>
                                                    <input name="pe_house_no" class="form-control" />
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label>Location</label>
                                                    <input name="pe_location" class="form-control" />
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label>Village/Street</label>
                                                    <input name="pe_street" class="form-control" />
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label>Thana</label>
                                                    <input name="pe_thana" class="form-control" />
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label>District</label>
                                                    <input name="pe_district" class="form-control" />
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label>Post code</label>
                                                    <input name="pe_post" class="form-control" />
                                                </div>
                                            </div>

                                            <div class="col-md-12 form-group">
                                                <label><br />Date of Birth: </label></div>
                                            <div class="col-md-12 form-group">
                                                <div class="col-md-2 form-group">
                                                    <input name="date_of_birth" type="date" class="form-control" />
                                                </div>
                                            </div>

                                            <!--Previous History-->
                                            <div class="col-md-12 form-group">
                                                <label><br />Previous History: </label></div>
                                            <div class="col-md-12 form-group">
                                                <table style="width:100%">
                                                    <tr>
                                                        <th style="text-align:center">Club Name</th>
                                                        <th style="text-align:center">From</th>
                                                        <th style="text-align:center">To</th>
                                                        <th style="text-align:center">Total Runs</th>
                                                        <th style="text-align:center">Total Wickets</th>
                                                        <th style="text-align:center">Team leader(Y/N)</th>
                                                    </tr>
                                                    <tr>
                                                        <td><input name="pcname" class="form-control" /></td>
                                                        <td><input name="pc_from" type="date" class="form-control" /></td>
                                                        <td><input name="pc_to" type="date" class="form-control" /></td>
                                                        <td><input name="total_runs" class="form-control" /></td>
                                                        <td><input name="total_wickets"class="form-control" /></td>
                                                        <td><input name="team_leader" class="form-control" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input name="cname" class="form-control" /></td>
                                                        <td><input name="pc_from" type="date" class="form-control" /></td>
                                                        <td><input name="pc_to" type="date" class="form-control" /></td>
                                                        <td><input name="total_runs" class="form-control" /></td>
                                                        <td><input name="total_wickets"class="form-control" /></td>
                                                        <td><input name="team_leader" class="form-control" /></td>
                                                    </tr>
                                                </table>
                                            </div>

                                            <!--Best Performance-->
                                            <div class="col-md-12 form-group">
                                                <label><br />Best Performance: </label></div>
                                            <div class="col-md-12 form-group">
                                                <table style="width:100%">
                                                    <tr>
                                                        <th style="text-align:center">Club Name</th>
                                                        <th style="text-align:center">Opponent Club Name</th>
                                                        <th style="text-align:center">Event Id</th>
                                                        <th style="text-align:center">Match Id</th>
                                                        <th style="text-align:center">Runs</th>
                                                        <th style="text-align:center">Wickets</th>
                                                    </tr>
                                                    <tr>
                                                        <td><input name="cname" class="form-control" /></td>
                                                        <td><input name="oppo_cname" class="form-control" /></td>
                                                        <td><input name="eid" class="form-control" /></td>
                                                        <td><input name="mid" class="form-control" /></td>
                                                        <td><input name="runs" class="form-control" /></td>
                                                        <td><input name="wicket" class="form-control" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input name="cname" class="form-control" /></td>
                                                        <td><input name="oppo_cname" class="form-control" /></td>
                                                        <td><input name="eid" class="form-control" /></td>
                                                        <td><input name="mid" class="form-control" /></td>
                                                        <td><input name="runs" class="form-control" /></td>
                                                        <td><input name="wicket" class="form-control" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input name="cname" class="form-control" /></td>
                                                        <td><input name="oppo_cname" class="form-control" /></td>
                                                        <td><input name="eid" class="form-control" /></td>
                                                        <td><input name="mid" class="form-control" /></td>
                                                        <td><input name="runs" class="form-control" /></td>
                                                        <td><input name="wicket" class="form-control" /></td>
                                                    </tr>
                                                </table>
                                            </div>

                                            <!--Education Qualification-->
                                            <div class="col-md-12 form-group">
                                                <label><br />Educational Qualifications: </label></div>
                                            <div class="col-md-12 form-group">
                                                <table style="width:100%">
                                                    <tr>
                                                        <th style="text-align:center">Name of Degree</th>
                                                        <th style="text-align:center">Institution/Department</th>
                                                        <th style="text-align:center">Board/University</th>
                                                        <th style="text-align:center">Year</th>
                                                        <th style="text-align:center">Result</th>
                                                    </tr>
                                                    <tr>
                                                        <td><input name="dname" class="form-control" /></td>
                                                        <td><input name="institution" class="form-control" /></td>
                                                        <td><input name="board" class="form-control" /></td>
                                                        <td><input name="year" class="form-control" /></td>
                                                        <td><input name="result "class="form-control" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input name="dname" class="form-control" /></td>
                                                        <td><input name="institution" class="form-control" /></td>
                                                        <td><input name="board" class="form-control" /></td>
                                                        <td><input name="year" class="form-control" /></td>
                                                        <td><input name="result "class="form-control" /></td>
                                                    </tr>
                                                </table>
                                            </div>

                                            <div class="col-md-12 form-group">
                                                <label><br />Membership</label>
                                                <div class="radio">
                                                    <label>
                                                        <input name="membership" type="radio" value="RICCB" checked />RICCB
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input name="membership" type="radio" value="BCCB" />BCCB
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input name="membership" type="radio" value="ACCB" />ACCB
                                                    </label>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label>If others, Name of the organization</label>
                                                    <input name="membership" class="form-control" />
                                                </div>
                                            </div>

                                            <!--Player Signature & Date-->
                                            <div class="col-md-12 form-group">
                                                <label><br />Signature of the Player:</label>
                                                <input type="file" />
                                            </div>
                                            <div class="col-md-12 form-group">
                                               <div class="col-md-2 form-group">
                                                <label>Date:</label>
                                                <input name="submission_date" type="date" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-md-12 form-group"><label><br /></label></div>
                                            <button type="submit" class="btn btn-success" position="right">Submit Button</button>
                                            <button type="reset" stype="position: right" class="btn btn-primary">Reset Button</button>

                                        </form>
                                        <br />

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Form Elements -->
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
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>

</html>