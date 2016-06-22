<?php
  include('side1.php'); 

  include ("db.php");	

	$msg = "";
	if(isset($_POST["submit"]))
	{
		$company_name = $_POST["company_name"];
		$email = $_POST["email"];
		$tin_number = $_POST["tin_number"];
		$diversity_categories = $_POST["diversity_categories"];
		$city = $_POST["city"];
		$web_url = $_POST["web_url"];
		$phone_number = $_POST["phone_number"];
		$fax_number = $_POST["fax_number"];

		$company_name = mysqli_real_escape_string($db, $company_name);
		$email = mysqli_real_escape_string($db, $email);
		$tin_number = mysqli_real_escape_string($db, $tin_number);
		$diversity_categories = mysqli_real_escape_string($db, $diversity_categories);
		$city = mysqli_real_escape_string($db, $city);
		$web_url = mysqli_real_escape_string($db, $web_url);
		$phone_number = mysqli_real_escape_string($db, $phone_number);
		$fax_number = mysqli_real_escape_string($db, $fax_number);

		$sql="SELECT email FROM supplier WHERE email='$email'";
		$result=mysqli_query($db,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		if(mysqli_num_rows($result) == 1)
		{
			echo "This email already exist...";
		}
		else
		{
			$query = mysqli_query($db, "INSERT INTO supplier (Supplier_name, Email, Tin_number, Diversity_categories, City, Web_url, Phone_number, Fax_number)VALUES ('$company_name', '$email', '$tin_number', '$diversity_categories', '$city', '$web_url', '$phone_number', '$fax_number')");
			if($query)
			{
				echo "You provided the details of your company.";
			}
		}
	}
			
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Company Detail Form</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- css file for sweetalert -->
  <link rel="stylesheet" href="sweetalert/dist/sweetalert.css" />

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="container">
        <div class="row" style="margin-top:60px">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-4">
                  <!-- Horizontal Form -->
                  <div class="box box-info">
                    <div class="box-header with-border">
                      <h3 class="box-title">Please provide details of your company</h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="post" action="">
                      <div class="box-body">
                        <div class="form-group">
                          <label for="company_name" class="col-sm-4 control-label">Company Name<span style="color:red;">*</span></label>

                          <div class="col-sm-8">
                            <input type="text" name="company_name" class="form-control" id="company_name" placeholder="Company Name" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="email" class="col-sm-4 control-label">Email<span style="color:red;">*</span></label>

                          <div class="col-sm-8">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="tin_number" class="col-sm-4 control-label">TIN Number<span style="color:red;">*</span></label>

                          <div class="col-sm-8">
                            <input type="text" name="tin_number" class="form-control" id="tin_number" placeholder="TIN Number" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="diversity_categories" class="col-sm-4 control-label">Diversity Categories<span style="color:red;">*</span></label>

                          <div class="col-sm-8">
                            <input type="text" name="diversity_categories" class="form-control" id="diversity_categories" placeholder="Diversity Categories" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="city" class="col-sm-4 control-label">City<span style="color:red;">*</span></label>

                          <div class="col-sm-8">
                            <input type="text" name="city" class="form-control" id="city" placeholder="City" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="web_url" class="col-sm-4 control-label">Web URL<span style="color:red;">*</span></label>

                          <div class="col-sm-8">
                            <input type="url" name="web_url" class="form-control" id="web_url" placeholder="Web URL" required>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="phone_number" class="col-sm-4 control-label">Phone Number</label>

                          <div class="col-sm-8">
                            <input type="tel" name="phone_number" class="form-control" id="phone_number" placeholder="Phone Number">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="fax_number" class="col-sm-4 control-label">Fax Number</label>

                          <div class="col-sm-8">
                            <input type="tel" name="fax_number" class="form-control" id="fax_number" placeholder="Fax Number">
                          </div>
                        </div>
                        
                      </div>
                      <!-- /.box-body -->
                      <div class="box-footer">
                        <div class="row">
                        
                        <div class="col-md-12"> 
                        <button type="submit" name = "submit" class="btn btn-info pull-right">Submit</button>
                        </div>
                        </div>
                      </div>
                      <!-- /.box-footer -->
                    </form>
                  </div>
                  </div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<!-- js file for sweetalert -->
<script src="sweetalert/dist/sweetalert.min.js"></script>



</body>
</html>