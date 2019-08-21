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
                        <h2>Team formation Form</h2>
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
                                        <form action="team_form_submit.php" method="POST" onsubmit="return confirm('New team is formed successfully..!!');">
                                          <div class="col-md-12 form-group">
                                          <fieldset disabled="disabled">
                                           <div class="col-md-4 form-group">
                                                <label>Team Id</label>
                                                <input class="form-control" placeholder="Keep it empty..!!" disabled/>
                                            </div>
                                              </fieldset>
                                            <div class="col-md-4 form-group">
                                                <label>Date of Formation:</label>
                                                <input name="date_of_formation" class="form-control" type="date"/>
                                            </div>
                                            <div class="col-md-4 form-group">
                                                
                                                <label>Team leader </label>
                                                <br /><input name="team_leader" class="form-control"/>
                                                
                                            </div>
                                            </div>
                            
                                        
                                            <!--Payment Schedule-->
                                            <div class="col-md-12 form-group">
                                                <label><br />Player's in a team (Max 15 players): </label></div>
                                            <div class="col-md-12 form-group">
                                                <table style="width:100%">

                                                    <tr>
                                                        <td><input name="player1" class="form-control" placeholder="Player 1 name"/></td>
                                                        <td><input  name="player2" class="form-control" placeholder="Player 2 name"/></td>
                                                        <td><input name="player3" class="form-control" placeholder="Player 3 name"/></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input name="player4" class="form-control" placeholder="Player 4 name"/></td>
                                                        <td><input name="player5" class="form-control" placeholder="Player 5 name"/></td>
                                                        <td><input name="player6" class="form-control" placeholder="Player 6 name"/></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input name="player7" class="form-control" placeholder="Player 7 name"/></td>
                                                        <td><input name="player8" class="form-control" placeholder="Player 8 name"/></td>
                                                        <td><input name="player9" class="form-control" placeholder="Player 9 name"/></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input name="player10" class="form-control" placeholder="Player 10 name"/></td>
                                                        <td><input name="player11" class="form-control" placeholder="Player 11 name"/></td>
                                                        <td><input name="player12" class="form-control" placeholder="Player 12 name"/></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input name="player13" class="form-control" placeholder="Player 13 name"/></td>
                                                        <td><input name="player14" class="form-control" placeholder="Player 14 name"/></td>
                                                        <td><input name="player15" class="form-control" placeholder="Player 15 name"/></td>
                                                    </tr>
                                                </table>
                                            </div>

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