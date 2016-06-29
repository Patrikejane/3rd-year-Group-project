<?php

include ("../db.php");

$msg = "";
if(isset($_POST["submit"]))
{
    $title = $_POST["title"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $dob = $_POST["dob"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $address = $_POST["address"];
    
    $district = $_POST["district"];
    $city = $_POST["city"];
    


    $title = mysqli_real_escape_string($db, $title);
    $first_name = mysqli_real_escape_string($db, $first_name);
    $last_name = mysqli_real_escape_string($db, $last_name);
    $dob = mysqli_real_escape_string($db, $dob);
    $email = mysqli_real_escape_string($db, $email);
    $password = mysqli_real_escape_string($db, $password);
    $password = md5($password);
    
    $address = mysqli_real_escape_string($db, $address);
    
    $district = mysqli_real_escape_string($db, $district);
    $city = mysqli_real_escape_string($db, $city);
    

    $sql="SELECT email FROM user WHERE email='$email'";
    $result=mysqli_query($db,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result) == 1)
    {
        echo 	'<script type="text/javascript">
						setTimeout(function(){
							sweetAlert("", "This email already exist...", "error")
						},100);
					 </script>';
    }
    else
    {
        $query = mysqli_query($db, "INSERT INTO user (title, first_name, last_name, dob, email, password, address, district, city)VALUES ('$title', '$first_name', '$last_name', '$dob', '$email', '$password', '$address', '$district', '$city')");
        if($query)
        {
            echo    '<script type="text/javascript">
                                setTimeout(function(){
                                    swal({title: "", text: "You are now registered.", type: "success"},
                                        function(isConfirm){
                                            if(isConfirm){
                                                window.location.href = "index.php";
                                            }
                                        }
                                    )
                                },100);
                             </script>';
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-Proc UCSC</title>

    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">


    <link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
    <!-- css file for sweetalert -->
    <link rel="stylesheet" href="../sweetalert/dist/sweetalert.css" />

    <!-- boxed bg -->
    <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
    <!-- template skin -->
    <link id="t-colors" href="color/default.css" rel="stylesheet">
    
    <!-- css file for sweetalert -->
    <link rel="stylesheet" href="../sweetalert/dist/sweetalert.css" />


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
                    <li ><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    
                    <li class="active"><a href="signup.php">Sign UP</a></li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Section: intro -->
    <section id="intro" class="intro">
        <div class="intro-contentsign">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="well well-trans">
                            <div class="wow fadeInRight "   data-wow-delay="0.1s">
                            <div class="box box-info">
                            <div class="box-header with-border">
                                <h3 class="box-title">Please Sign Up <small>Fill in your personal details</small></h3>
                            </div>
                            <!-- /.box-header -->
                            <!-- form start -->
                            <form class="form-horizontal" method="post" action="">
                            <div class="box-body">

                            <div class="form-group">

                                <label for="title" class="col-sm-2 control-label">Title</label>

                                <div class="col-sm-4">

                                    <input type="text" name="title" class="form-control" id="title" placeholder="Mr/Mrs/Ms/Dr" required>


                                </div>

                            </div>

                            <div class="form-group">

                                <label for="first_name" class="col-sm-2 control-label">First Name</label>

                                <div class="col-sm-4">

                                    <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name" required>


                                </div>

                                <label for="last_name" class="col-sm-2 control-label">Last Name</label>

                                <div class="col-sm-4">

                                    <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name" required>


                                </div>

                            </div>

                            <div class="form-group">

                                <label for="dob" class="col-sm-2 control-label">Date of Birth</label>

                                <div class="col-sm-4">

                                    <input type="date" name="dob" class="form-control" id="dob" required>


                                </div>

                            </div>

                            <div class="form-group">

                                <label for="dob" class="col-sm-2 control-label">Email</label>

                                <div class="col-sm-4">

                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>


                                </div>

                            </div>

                            <div class="form-group">

                                <label for="password" class="col-sm-2 control-label">Password</label>

                                <div class="col-sm-4">

                                    <input type="password" name="password" class="form-control" id="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" placeholder="Password" required>


                                </div>

                                <label for="password_confirmation" class="col-sm-2 control-label">Confirm Password</label>

                                <div class="col-sm-4">

                                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');" placeholder="Retype Password" required>


                                </div>

                            </div>

                            <!--<div class="form-group">

                                <label for="organization_name" class="col-sm-2 control-label">Organization Name<span style="color:red;">*</span></label>

                                <div class="col-sm-4">

                                    <input type="text" name="organization_name" class="form-control" id="organization_name" placeholder="Organization Name" required>


                                </div>

                                <label for="last_name" class="col-sm-2 control-label">Department<span style="color:red;">*</span></label>

                                <div class="col-sm-4">

                                    <input type="text" name="department" class="form-control" id="department" placeholder="Department" required>


                                </div>

                            </div>

                            <div class="form-group">

                                <label for="first_name" class="col-sm-2 control-label">Division<span style="color:red;">*</span></label>

                                <div class="col-sm-4">

                                    <input type="text" name="division" class="form-control" id="division" placeholder="Division" required>


                                </div>

                                <label for="last_name" class="col-sm-2 control-label">Designation<span style="color:red;">*</span></label>

                                <div class="col-sm-4">

                                    <input type="text" name="designation" class="form-control" id="designation" placeholder="Designation" required>


                                </div>

                            </div>-->

                            <div class="form-group">

                                <label for="first_name" class="col-sm-2 control-label">Address</label>

                                <div class="col-sm-4">

                                    <input type="text" name="address" class="form-control" id="address" placeholder="Address" required>


                                </div>

                                <!--<label for="last_name" class="col-sm-2 control-label">Address 2</label>

                                <div class="col-sm-4">

                                    <input type="text" name="address_2" class="form-control" id="address_2" placeholder="Address 2">


                                </div>-->

                            </div>

                            <div class="form-group">

                                <label for="first_name" class="col-sm-2 control-label">District</label>

                                <div class="col-sm-4">

                                    <input type="text" name="district" class="form-control" id="district" placeholder="District">


                                </div>

                                <label for="last_name" class="col-sm-2 control-label">City</label>

                                <div class="col-sm-4">

                                    <input type="text" name="city" class="form-control" id="city" placeholder="City" required>


                                </div>

                            </div>

                            <!--<div class="form-group">

                                <label for="title" class="col-sm-2 control-label">Alternate Email<span style="color:red;">*</span></label>

                                <div class="col-sm-4">

                                    <input type="email" name="alternate_email" class="form-control" id="alternate_email" placeholder="Alternate Email" required>


                                </div>

                            </div>

                            <div class="form-group">

                                <label for="first_name" class="col-sm-2 control-label">Phone Number</label>

                                <div class="col-sm-4">

                                    <input type="tel" name="phone_number" class="form-control" id="phone_number" placeholder="Phone Number">


                                </div>

                                <label for="last_name" class="col-sm-2 control-label">Fax Number</label>

                                <div class="col-sm-4">

                                    <input type="tel" name="fax_number" class="form-control" id="fax_number" placeholder="Fax Number">


                                </div>

                            </div>

                            <div class="form-group">

                                <label for="title" class="col-sm-2 control-label">Mobile Number</label>

                                <div class="col-sm-4">

                                    <input type="tel" name="mobile_number" class="form-control" id="mobile_number" placeholder="Mobile Number">


                                </div>

                            </div>

                            <div class="form-group">

                                <label for="title" class="col-sm-2 control-label">User Role<span style="color:red;">*</span></label>

                                <div class="col-sm-4">


                                    <select class="form-control" name="user_role" id="user_role" required>
                                        <option disabled selected value>Select An User Role</option>
                                        <option>Tender Creator</option>
                                        <option value="bid_opener">Bid Opener</option>
                                        <option>Volunteer</option>
                                    </select>



                                </div>

                            </div>-->



                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="checkbox" required> I agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms & Conditions</a>.
                                        </label>
                                        <!--<a href="" class="btn btn-link pull-right">Forgot Password?</a>-->
                                    </div>
                                </div>
                            </div>
                            </div>

                            <!-- /.box-body -->
                            <div class="box-footer">

                                <div class="row">

                                    <div class="col-md-4 col-md-offset-2">
                                        <button type="submit" class="btn btn-default"><a href="index.php">Cancel</a></button>
                                    </div>

                                    <div class="col-md-4 col-md-offset-2">
                                        <button type="submit" name="submit" class="btn btn-info pull-right">Register</button>
                                    </div>

                                </div>

                            </div>
                            <!-- /.box-footer -->

                            </form>

                            <div><?php echo $msg;?></div>

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
                                <p>&copy;Copyright 2016 - UCSC. All rights reserved.</p>
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
<script src="../sweetalert/dist/sweetalert.min.js"></script>


</body>

</html>