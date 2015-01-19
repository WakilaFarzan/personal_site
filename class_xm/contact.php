



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<?php

include_once('header.php');
?>
<section class="container">
    <div class="row">
        <div class="col-md-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d116834.13673771205!2d90.41932575!3d23.780636450000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1421652421425" width="100%" height="450" frameborder="0" style="border:0"></iframe>
            </div>
        </div>
</section>
<section class="container">
    <div class="row">
        <div class="col-md-8">
            <h2>Contact Message</h2>
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></div>
                        <input type="text" class="form-control" id="exampleInputAmount" placeholder="Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></div>
                        <input type="email" class="form-control" id="exampleInputAmount" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Message</label>
                    <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></div>
                        <textarea rows="3" placeholder="Enter your message here" class="form-control" id="exampleInputAmount"></textarea>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
        <div class="col-md-4">
            <h2>Address</h2>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                             Address1
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Address2
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Address3
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="container">
    <div class="row">
        <div class="col-md-12">
            <p>&copy;2015 Wakila</p>
        </div>
    </div>
</footer>






<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>