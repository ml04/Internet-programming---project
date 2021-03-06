<?php

include("includes/config.php");
include("includes/db.php");


if(isset($_POST['add_message'])){
	$name = mysqli_real_escape_string($db, $_POST['ime']);
	$email = mysqli_real_escape_string($db, $_POST['mail']);
	$phone = mysqli_real_escape_string($db, $_POST['telefon']);
	$message = mysqli_real_escape_string($db, $_POST['poruka']);
	
	$d = getdate();
	$date = "$d[month] $d[mday], $d[year]";
	print_r($date);
	
	$query = "INSERT INTO contact_form(name, email, phone, message, date) 
		VALUES('$name','$email','$phone','$message','$date')";
		
	$db->query($query);
	
}



?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gibson - Contact</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
     <link rel="stylesheet" type="text/css" href="css/mystyle.css">  

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand">GIBSON GUITARS</div>
    <div class="address-bar">309 Plus Park Blvd. | Nashville, TN 37217.</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">Gibson Guitars</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="povijest.html">History</a>
                    </li>
                    <li>
                        <a href="galerija.html">Gallery</a>
                    </li>
                    <li>
                        <a href="kontakt.html">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>Gibson Guitars</strong>
                    </h2>
                    <hr>
                </div>
            

                <div class="col-md-8" style="width:700px;overflow:hidden;height:500px;max-width:100%;"><div id="embed-map-canvas" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=309+Plus+Park+Boulevard,+Nashville,+Tennessee,+Sjedinjene+Države&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><a class="google-map-code-enabler" href="https://www.hostingreviews.website/inmotion-hosting-review" id="grab-map-authorization">inmotion hosting review</a><style>#embed-map-canvas .text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style></div><script src="https://www.hostingreviews.website/google-maps-authorization.js?id=389a1239-b45b-3183-4ba7-27087f0beb63&c=google-map-code-enabler&u=1467746325" defer="defer" async="async"></script>

                <div class="col-md-4">
                    <p>Phone:
                        <strong>00+8004GIBSON1</strong>
                    </p>
                    <p>Email:
                        <strong>gibson_factory@gmail.com</a></strong>
                    </p>
                    <p>Address:
                        <strong>309 Plus Park Blvd.
                            <br>Nashville, TN 37217</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>form</strong>
                    </h2>
                    <hr>
                    <p>If you have any question regarding our products or our company, please fill out the following form and we will reply soon!</p>
                    <form method="post">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name</label>
                                <input type="text" class="form-control" name="ime">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" class="form-control" name="mail">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Phone Number</label>
                                <input type="text" class="form-control" name="telefon">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea class="form-control" rows="6" name="poruka"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="submit" name="add_message" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

   

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
