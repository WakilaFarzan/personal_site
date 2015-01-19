
<?php

session_start();
if(isset($_SESSION['firstname'])){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard</title>
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap1.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap2.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <script src="js/bootstrap3.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body>
<!-- Header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-toggle"></span>
            </button>
            <a class="navbar-brand" href="#">Control Panel</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">
                        <i class="glyphicon glyphicon-user"></i> Admin <span class="caret"></span></a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
                        <li><a href="view1.php">My Profile</a></li>
                        <li><a href="list.php">Admin Info List</a></li>
                        <li><a href="logout.php"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /container -->
</div>
<!-- /Header -->

<!-- Main -->
<div class="container">

<!-- upper section -->
<div class="row">
    <div class="col-md-3">
        <!-- left -->
        <h3><i class="glyphicon glyphicon-briefcase"></i> Toolbox</h3>
        <hr>

        <ul class="nav nav-stacked">
            <li><a href="javascript:;"><i class="glyphicon glyphicon-flash"></i> Alerts</a></li>
            <li><a href="javascript:;"><i class="glyphicon glyphicon-link"></i> Links</a></li>
            <li><a href="javascript:;"><i class="glyphicon glyphicon-list-alt"></i> Reports</a></li>
            <li><a href="javascript:;"><i class="glyphicon glyphicon-book"></i> Books</a></li>
            <li><a href="javascript:;"><i class="glyphicon glyphicon-briefcase"></i> Tools</a></li>
            <li><a href="javascript:;"><i class="glyphicon glyphicon-time"></i> Real-time</a></li>
            <li><a href="javascript:;"><i class="glyphicon glyphicon-plus"></i> Advanced..</a></li>
        </ul>

        <hr>

    </div><!-- /span-3 -->
    <div class="col-md-6">

        <!-- column 2 -->
        <h3><i class="glyphicon glyphicon-dashboard"></i> Dashboard</h3>

        <hr>
        <div class="well">
            <p class="text-center">Profile Completion</p>
            <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                    60%
                </div>
            </div>
        </div>

    </div><!--/col-span-9-->
    <div class="col-md-3">
        <h3><i class="glyphicon glyphicon-dashboard"></i> Extra</h3>

        <hr>

        <ul class="nav nav-pills nav-stacked">
            <li class="nav-header"></li>
            <li><a href="#"><i class="glyphicon glyphicon-list"></i> Layouts &amp; Templates</a></li>
            <li class="divider"></li>
            <li><a href="#"><i class="glyphicon glyphicon-briefcase"></i> Toolbox</a></li>
            <li><a href="#"><i class="glyphicon glyphicon-link"></i> Widgets</a></li>
            <li><a href="#"><i class="glyphicon glyphicon-list-alt"></i> Reports</a></li>
            <li><a href="#"><i class="glyphicon glyphicon-book"></i> Pages</a></li>
            <li class="divider"></li>
            <li><a href="#"><i class="glyphicon glyphicon-star"></i> Social Media</a></li>
        </ul>

        <hr>
        <div class="panel panel-default">
            <div class="panel-heading"><div class="panel-title"><h4>Engagement</h4></div></div>
            <div class="panel-body">
                <div class="col-xs-4 text-center"><img src="http://placehold.it/80/BBBBBB/FFF" class="img-circle img-responsive"></div>
                <div class="col-xs-4 text-center"><img src="http://placehold.it/80/EFEFEF/555" class="img-circle img-responsive"></div>
                <div class="col-xs-4 text-center"><img src="http://placehold.it/80/EEEEEE/222" class="img-circle img-responsive"></div>
            </div>
        </div><!--/panel-->

    </div><!--/col-->

</div><!--/row-->
<div class="row">


</div>

</div>


<?php

include_once('footer.php');

?>




<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>

<?php }

else {
    header("location:sign_in.php");
}


?>