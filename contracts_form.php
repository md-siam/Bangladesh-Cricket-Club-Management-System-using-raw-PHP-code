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
                        <h2>Player's Contract Form</h2>
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
                                        <form action="contracts_form_submit.php" method="POST" onsubmit="return confirm('Contract form submitted successfully..!!');">
                                          <div class="col-md-12 form-group">
                                           <div class="col-md-5 form-group">
                                                <label>Club Id</label>
                                                <input name="cid" class="form-control" required/>
                                            </div>
                                            <div class="col-md-5 form-group">
                                                <label>Club Name</label>
                                                <input name="cname" class="form-control" required/>
                                            </div>
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label><br />First Party: <br/><br/> Name of the Player</label>
                                                </div>
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
                                            <div class="col-md-12 form-group">
                                            <div class="col-md-4 form-group">
                                                <label>Player Id</label>
                                                <input name="pid" class="form-control" required/>
                                            </div>
                                            </div>
                                            
                                             <div class="col-md-12 form-group">
                                                <label><br />Second Party: <br/><br/> Authorized Person</label>
                                                </div>
                                            <div class="col-md-4 form-group">
                                                <label>First Name</label>
                                                <input name="aut_fname" class="form-control" />
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label>Middle Name</label>
                                                <input name="aut_mname" class="form-control" />
                                            </div>
                                            <div class="col-md-4 form-group">
                                                <label>Last Name</label>
                                                <input name="aut_lname" class="form-control" />
                                            </div>
                                            <div class="col-md-12 form-group">
                                            <div class="col-md-4 form-group">
                                                <label>Designation</label>
                                                <input name="designation" class="form-control" placeholder="Post in Bangladesh Cricket Clud"/>
                                            </div>
                                            </div>
                                            
                                            <div class="col-md-12 form-group">
                                                <label><br />Contract Period</label>
                                                </div>
                                            <div class="col-md-6 form-group">
                                               <div class="col-md-6">
                                                <label>Start Date: </label>
                                                <input name="c_start_date" type="date" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="col-md-6 form-group">
                                               <div class="col-md-6">
                                                <label>End Date: </label>
                                                <input name="c_end_date" type="date" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="col-md-12 form-group">
                                            <div class="col-md-4 form-group">
                                                <label>Contract Amount</label>
                                                <input name="amount" class="form-control" />
                                            </div>
                                            </div>
                                        
                                            <!--Payment Schedule-->
                                            <div class="col-md-12 form-group">
                                                <label><br />Payment Schedule: </label></div>
                                            <div class="col-md-12 form-group">
                                                <table style="width:100%">
                                                    <tr>
                                                        <th style="text-align:center">Serial Number</th>
                                                        <th style="text-align:center">Due date</th>
                                                        <th style="text-align:center">Payment Date</th>
                                                        <th style="text-align:center">Amount</th>
                                                    </tr>
                                                    <tr>
                                                        <td><input name="pay_serial" class="form-control" required/></td>
                                                        <td><input name="pay_due" type="date" class="form-control" /></td>
                                                        <td><input name="pay_actual" type="date" class="form-control" /></td>
                                                        <td><input name="pay_amount" class="form-control" /></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input class="form-control" /></td>
                                                        <td><input type="date" class="form-control" /></td>
                                                        <td><input type="date" class="form-control" /></td>
                                                        <td><input class="form-control" /></td>
                                                    </tr>
                                                </table>
                                            </div>


                                            <!--Contract witness Signature-->
                                            <div class="col-md-12 form-group">
                                                <label><br />Signature of the Witness 1:</label>
                                                <input type="file" />
                                            </div>
                                            <div class="col-md-12 form-group">
                                                <label><br />Signature of the Witness 2:</label>
                                                <input type="file" />
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