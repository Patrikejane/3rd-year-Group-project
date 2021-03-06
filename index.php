<?php

include ("login.php");

/*if ((isset($_SESSION['email']) != '')) 
    {
        header('Location: home.php');
    }*/

 /*if(!isset($_SESSION['isLoggedIn'])){
	 	header("location: home.php");
	 }*/
    $sql="SELECT item_title,item_description FROM tenderdocument";
    $result = mysqli_query($db,$sql);

    $num_rows = mysqli_num_rows($result);
    //echo $num_rows;
    $fields = $num_rows;



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-Proc UCSC | Log In</title>

    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">


	<link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href="color/default.css" rel="stylesheet">
	<!-- css file for sweetalert -->
    <link rel="stylesheet" href="sweetalert/dist/sweetalert.css" />


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<div id="wrapper">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">

        <div class="container navigation">

            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo.png" alt="" width="150" height="40" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="index.php">Sign In</a></li>
				<li><a href="aboutlogin.php">About</a></li>
                  
                  <li><a href="signup.php">Sign Up</a></li>

			  </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


	<!-- Section: intro -->
    <section id="intro" class="intro">
		<div class="intro-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">

						<div class="well well-trans" style="opacity: 0.7;">
						<div class="wow fadeInRight " style="height: 200px;overflow: hidden;"  data-wow-delay="0.01s">
                            <div style="overflow-y: hidden;">
                                list of  new proc details
                                    <marquee direction="up"  scrollamount=7>
                                        <ul class="lead-list">
                                            <?php
                                            while ($row = mysqli_fetch_array($result)) {
                                                echo '<li>';
                                                for($i = 0; $i < 2 ; $i++) {
                                                    if($i == 0){
                                                    echo '<span class="list"><strong> Tender of '.$row[$i].'</strong><br />';
                                                    }
                                                    if($i == 1){
                                                        echo $row[$i];
                                                    }
                                                }

                                                echo '</span></li>';
                                            }



                                            ?>


                                        </ul>
                                    </marquee>
                            </div>
						</div>
						</div>


					</div>
					<div class="col-lg-6">
						<div class="form-wrapper">
						<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">

							<div class="box box-info">
			                    <div class="box-header with-border">
			                      <h3 class="box-title">Please Sign In</h3>
			                    </div>
			                    <!-- /.box-header -->
			                    <!-- form start -->
			                    <form class="form-horizontal" method="post" action="">
			                      <div class="box-body">
			                        <div class="form-group">
			                          <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

			                          <div class="col-sm-10">
			                            <input type="email" name="email" value="<?php if(isset($_COOKIE["user_email"])) { echo $_COOKIE["user_email"]; } ?>" class="form-control" id="email" placeholder="Email" required>
			                          </div>
			                        </div>
			                        <div class="form-group">
			                          <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

			                          <div class="col-sm-10">
			                            <input type="password" name="password" value="<?php if(isset($_COOKIE["user_password"])) { echo $_COOKIE["user_password"]; } ?>" class="form-control" id="password" placeholder="Password" required>
			                          </div>
			                        </div>
			                        <div class="form-group">
			                          <div class="col-sm-offset-2 col-sm-10">
			                            <div class="checkbox">
			                              <label>
			                                <input type="checkbox" name="remember" <?php if(isset($_COOKIE["user_email"])) { ?> checked <?php } ?> id="remember"> Remember me
			                              </label>
			                              <a href="../forgotPassword.php" class="btn btn-link pull-right">Forgot Password?</a>
			                            </div>
			                          </div>
			                        </div>
			                      </div>
			                      <!-- /.box-body -->
			                      <div class="box-footer">
			                        <div class="row">
			                        <div class="col-md-4 col-md-offset-2">
			                        <button type="submit" class="btn btn-default"><a href="signup.php">Cancel</a></button>
			                        </div>
			                        <div class="col-md-4 col-md-offset-2">
			                        <button type="submit" name = "submit" class="btn btn-info pull-right">Sign in</button>
			                        </div>
			                        </div>
			                      </div>
			                      <!-- /.box-footer -->
			                    </form>
			                  </div>

						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>

	<!-- /Section: intro -->

	<!-- Section: boxes -->


	<footer>

		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">

					</div>
					</div>

				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">

					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="widget">


					</div>
					</div>

				</div>
			</div>
		</div>
		<div class="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInLeft" data-wow-delay="0.1s">
					<div class="text-left">
					<p>&copy;Copyright 2016- UCSC. All rights reserved.</p>
					</div>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
					<div class="wow fadeInRight" data-wow-delay="0.1s">

					</div>
				</div>
			</div>
		</div>
		</div>
	</footer>

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- js file for sweetalert -->
	<script src="sweetalert/dist/sweetalert.min.js"></script>


</body>

</html>

