<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Natureme - Eco Cleaning booking within seconds!</title>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/main.min.js"></script>

    <!-- JQuery Validate -->
    <!-- <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/additional-methods.min.js"></script> -->
    
    <link href="css/progress-wizard.min.css" rel="stylesheet">
    
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!--<link href="css/main.min.css" rel="stylesheet"> -->

    <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="booking.php">
                    <img class="logo" src="images/natureme-logo-dark.png" alt="">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="links-header" href="booking.php">Book Now</a>
                    </li>
                    <li>
                        <a class="links-header" href="#">About</a>
                    </li>
                    <li>
                        <a class="links-header" href="#">FAQ</a>
                    </li>
                    <li>
                        <a class="links-header" href="#">Contact</a>
                    </li>
                    <li>
                        <a class="links-icons-header" href="#" data-toggle="modal" data-target="#myModal">
                            <img class="img-check-out" src="images/user.png" alt="user">
                            <span class="txt-icons">Carlos</span>
                        </a>
                    </li>
                    <li>
                        <a class="links-icons-header" href="#">
                            <img class="img-check-out" src="images/suport.png" alt="suport">
                            <span class="txt-icons">Support</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header -->
    <header class="progress-bar-circles">
        <!-- Progress bar -->
        <div class="container-full">
            <ul class="progress-indicator">
                <li class="complete">
                    <a class="links-progress-bar" href="booking.php">
                        <span class="bubble bubble-finished"></span>
                        <p class="finished-txt">Booking</p>
                    </a>
                </li>
                <li class="active">
                    <a class="links-progress-bar" href="personal-details.php">
                        <span class="bubble bubble-finished"></span>
                        <p class="finished-txt">Personal Details</p>
                    </a>
                </li>
                <li class="">
                    <a class="links-progress-bar" href="payment.php">
                        <span class="bubble bubble-finished"></span>
                        <p class="finished-txt">Payment</p>
                    </a>
                </li>
                <li class="">
                    <a class="links-progress-bar" href="check-out.php">
                        <span class="bubble bubble-active"></span>
                        <p class="active-txt">Check-out</p>
                    </a>
                </li>
            </ul>
        </div>
    </header>
        
    <div class="container">

    <!-- Modal user-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <img src="images/user-modal.png" class="img-user-profile">
                        <span class="name-user">user name here</span>
                    </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="links-modal col-md-6">
                            <img class="icons-profile" src="images/dash-icon.png">
                            <a href="booking.php"><span class="txt-profile">Dashboard</span></a>
                        </div>
                        <div class="links-modal col-md-6">
                            <img class="icons-profile" src="images/password-icon.png">
                             <a href="personal-details.php"><span class="txt-profile">Password</span></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="links-modal col-md-6">
                            <img class="icons-profile" src="images/use-icon-profile.png">
                            <a href="personal-details.php"><span class="txt-profile">Profile</span></a>
                        </div>
                        <div class="links-modal col-md-6">
                            <img class="icons-profile" src="images/green-icon.png">
                            <a href="#"><span class="txt-profile">Greenify</span></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="links-modal col-md-12">
                            <img class="icons-profile" src="images/billing-icon.png">
                            <a href="payment.php"><span class="txt-profile">Billing</span></a>
                        </div>
                    </div>
                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-cancel" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
            
        <div class="row">
            <div class="col-lg-12">
                <h3 class="titles title-details">Check-out</h3>
                <a href="#">Upcoming</a> / <a href="#">Previous</a>
            </div>
        </div>
        <div class="row">    
            <div class="col-md-3 col-sm-12 text-center box-summary">
                <div class="thumbnail summary">
                    <div class="plan-name">
                        <h4 class="tit-plan-name plan-summary">Summary</h4>
                    </div>
                    <div class="caption">
                        <p class="descrp-plans">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="caption">
                        <img class="img-summary" src="images/credit-cards.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-sm-12 details-form">
                
                <form method="post" action="payment.php" id="payment">
                    <div class="row">
                        <div class="col-md-12 col sm-12 itens-details-form">
                            <div class="col-lg-1 col-md-1 col-sm-3">
                                <input type="checkbox">
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">Eco Clean</div>
                            <div class="col-lg-6 col-md-6 col-sm-3">Thu, June 04 @ 9:00am - 3h</div><!-- dynamic -->
                            <div class="col-lg-2 col-md-2 col-sm-3">$300</div>
                        </div>
                        <div class="col-md-12 col sm-12 itens-details-form">
                            <div class="col-lg-1 col-md-1 col-sm-3">
                                <input type="checkbox">
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3">Eco Clean</div>
                            <div class="col-lg-6 col-md-6 col-sm-3">Thu, June 06 @ 12:00am - 5h</div><!-- dynamic -->
                            <div class="col-lg-2 col-md-2 col-sm-3">$300</div>
                        </div>
                    </div>
                </form>
            </div>  
            <div class="row">
                <div class="col-md-12">
                    <a onclick="submitForms()" href="payment.php" class="btn btn-general btn-next">Confirm booking</a>
                </div>
            </div>         
        </div>
    </div>


<?php include 'footer.html';?>
