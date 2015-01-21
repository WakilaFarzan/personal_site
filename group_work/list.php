


<?php


include_once('connection.php');

$query = "select * from registration;";

$result = mysqli_query($link, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin List</title>
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
<body >
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-toggle"></span>
            </button>
            <a class="navbar-brand" href="dashboard.php">Control Panel</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">
                        <i class="glyphicon glyphicon-user"></i> Admin <span class="caret"></span></a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="view1.php">Profile info</a></li>
                        <li><a href="logout.php"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /container -->
</div>
<section class="container">
    <div class="row">
        <div class="col-md-12">
            <h3><i class="glyphicon glyphicon-dashboard"></i> Admin Info list</h3>

            <hr>


            <table  class="table table-striped">
                <tr>
                    <td>ID</td>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>Email</td>
                    <td>Password</td>
                    <td>Gender</td>
                    <td>Birthday</td>
                    <td>Hobby</td>
                    <td>City</td>
                    <td>Comment</td>
                    <td>Created</td>
                    <td>Modified</td>
                    <td>Action</td>
                </tr>
                <?php
                foreach($result as $row){
                    ?>

                    <tr>
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['first_name']?></td>
                        <td><?php echo $row['last_name']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['password']?></td>
                        <td><?php echo $row['gender']?></td>
                        <td><?php echo $row['bday']?></td>
                        <td><?php echo $row['hobby']?></td>
                        <td><?php echo $row['city']?></td>
                        <td><?php echo $row['comment']?></td>
                        <td><?php echo $row['created']?></td>
                        <td><?php echo $row['modified']?></td>

                        <td> <a class="btn btn-default" role="button" href="view.php?id=<?php echo $row['id']?>">View</a><br>
                            <a class="btn btn-default" role="button" href="edit.php?id=<?php echo $row['id']?>">Edit</a><br>
                            <a class="btn btn-default" href="" role="button" data-toggle="modal" data-target="#myModal">Delete</a>
                        </td>
                    </tr>


                <?php
                }
                ?>

            </table>
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                           Do you want to delete this data?
                        </div>
                        <div class="modal-footer">
                            <a class="btn btn-default" href="delete.php?id=<?php echo $row['id']?>" role="button">Yes</a>
                            <a class="btn btn-default" href="list.php" role="button">No</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



</section>

<?php

include_once('footer.php');

?>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>


