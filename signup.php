<?php

	include ("db.php");	

	$msg = "";
	if(isset($_POST["submit"]))
	{
		$title = $_POST["title"];
		$first_name = $_POST["first_name"];
		$last_name = $_POST["last_name"];
		$dob = $_POST["dob"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		$organization_name = $_POST["organization_name"];
		$department = $_POST["department"];
		$division = $_POST["division"];
		$designation = $_POST["designation"];
		$address_1 = $_POST["address_1"];
		$address_2 = $_POST["address_2"];
		$district = $_POST["district"];
		$city = $_POST["city"];
		$alternate_email = $_POST["alternate_email"];
		$phone_number = $_POST["phone_number"];
		$fax_number = $_POST["fax_number"];
		$mobile_number = $_POST["mobile_number"];
		$user_role = $_POST["user_role"];

		
		$title = mysqli_real_escape_string($db, $title);
		$first_name = mysqli_real_escape_string($db, $first_name);
		$last_name = mysqli_real_escape_string($db, $last_name);
		$dob = mysqli_real_escape_string($db, $dob);
		$email = mysqli_real_escape_string($db, $email);
		$password = mysqli_real_escape_string($db, $password);
		$password = md5($password);
		$organization_name = mysqli_real_escape_string($db, $organization_name);
		$department = mysqli_real_escape_string($db, $department);
		$division = mysqli_real_escape_string($db, $division);
		$designation = mysqli_real_escape_string($db, $designation);
		$address_1 = mysqli_real_escape_string($db, $address_1);
		$address_2 = mysqli_real_escape_string($db, $address_2);
		$district = mysqli_real_escape_string($db, $district);
		$city = mysqli_real_escape_string($db, $city);
		$alternate_email = mysqli_real_escape_string($db, $alternate_email);
		$phone_number = mysqli_real_escape_string($db, $phone_number);
		$fax_number = mysqli_real_escape_string($db, $fax_number);
		$mobile_number = mysqli_real_escape_string($db, $mobile_number);
		$user_role = mysqli_real_escape_string($db, $user_role);

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
			$query = mysqli_query($db, "INSERT INTO user (title, first_name, last_name, dob, email, password, organization_name, department, division, designation, address_1, address_2, district, city, alternate_email, phone_number, fax_number, mobile_number, user_role)VALUES ('$title', '$first_name', '$last_name', '$dob', '$email', '$password', '$organization_name', '$department', '$division', '$designation', '$address_1', '$address_2', '$district', '$city', '$alternate_email', '$phone_number', '$fax_number', '$mobile_number', '$user_role')");
			if($query)
			{
				echo 	'<script type="text/javascript">
							setTimeout(function(){
								sweetAlert("", "You are now registered.", "success");
							},100);
					 	 </script>';

			}
		}
	}
	include('side1.php');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sign up page</title>
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

		<div class="row" style="margin-top:40px">
        <div class="col-xs-12 col-sm-8 col-md-10 col-sm-offset-2 col-md-offset-2">
                  <!-- Horizontal Form -->
                  <div class="box box-info">
                    <div class="box-header with-border">
                      <h3 class="box-title">Please Sign Up <small>Fill in your personal details</small></h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form class="form-horizontal" method="post" action="">
                      <div class="box-body">

                        <div class="form-group">

                          	<label for="title" class="col-sm-2 control-label">Title<span style="color:red;">*</span></label>

                          	<div class="col-sm-4">
	                        	
	                            	<input type="text" name="title" class="form-control" id="title" placeholder="Mr/Mrs/Ms/Dr" required>
	                            	
	                        	
                          	</div>

                        </div>
                        
                        <div class="form-group">

	                        <label for="first_name" class="col-sm-2 control-label">First Name<span style="color:red;">*</span></label>

	                        <div class="col-sm-4">
	                          	
	                            	<input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name" required>
	                            	
	                          	
	                        </div>

	                        <label for="last_name" class="col-sm-2 control-label">Last Name<span style="color:red;">*</span></label>

	                        <div class="col-sm-4">
	                        	
	                            	<input type="text" name="last_name" class="form-control" id="last_name" placeholder="Last Name" required>
	                            	
	                          	
	                        </div>

	                    </div>						
	                        
	                   	<div class="form-group">

                          	<label for="dob" class="col-sm-2 control-label">Date of Birth<span style="color:red;">*</span></label>

                          	<div class="col-sm-4">
	                          	
	                          		<input type="date" name="dob" class="form-control" id="dob" required>
				                  	
	                			
                			</div>

                        </div> 
			            
	                   	<div class="form-group">

                          	<label for="dob" class="col-sm-2 control-label">Email<span style="color:red;">*</span></label>

                          	<div class="col-sm-4">
	                          	
	                          		<input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
				                  	
	                			
                			</div>

                        </div>

                        <div class="form-group">

	                        <label for="password" class="col-sm-2 control-label">Password<span style="color:red;">*</span></label>

	                        <div class="col-sm-4">
	                          	
	                            	<input type="password" name="password" class="form-control" id="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" placeholder="Password" required>
	                            	
	                          	
	                        </div>

	                        <label for="password_confirmation" class="col-sm-2 control-label">Confirm Password<span style="color:red;">*</span></label>

	                        <div class="col-sm-4">
	                        	
	                            	<input type="password" name="password_confirmation" class="form-control" id="password_confirmation" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');" placeholder="Retype Password" required>
	                            	
	                          	
	                        </div>

	                    </div>

                        <div class="form-group">

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

	                    </div>			                                                 	                    

                        <div class="form-group">

	                        <label for="first_name" class="col-sm-2 control-label">Address 1<span style="color:red;">*</span></label>

	                        <div class="col-sm-4">
	                          	
	                            	<input type="text" name="address_1" class="form-control" id="address_1" placeholder="Address 1" required>
	                            	
	                          	
	                        </div>

	                        <label for="last_name" class="col-sm-2 control-label">Address 2</label>

	                        <div class="col-sm-4">
	                        	
	                            	<input type="text" name="address_2" class="form-control" id="address_2" placeholder="Address 2">
	                            	
	                          	
	                        </div>

	                    </div>			           

                        <div class="form-group">

	                        <label for="first_name" class="col-sm-2 control-label">District</label>

	                        <div class="col-sm-4">
	                          	
	                            	<input type="text" name="district" class="form-control" id="district" placeholder="District">
	                            	
	                          	
	                        </div>

	                        <label for="last_name" class="col-sm-2 control-label">City<span style="color:red;">*</span></label>

	                        <div class="col-sm-4">
	                        	
	                            	<input type="text" name="city" class="form-control" id="city" placeholder="City" required>
	                            	
	                          	
	                        </div>

	                    </div>

                        <div class="form-group">

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
				                    <option>Bid Opener</option>
				                    <option>Volunteer</option>
				                  </select>
				                  
				                
	                            	
	                        </div>

                        </div>
			            
			                                    		                                                               

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
                        		<button type="submit" class="btn btn-default"><a href="signin.php">Cancel</a></button>
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

<!-- Modal -->
	<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
					<h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
				</div>
				<div class="modal-body">
					<p>Note : The requested tenders administration accounts details will be communicated by email</p>
					<p>Disclaimer : This account is meant for publishing and maintaining the tenders information on E-Procurement Management System. The sole responsibility of the accuracy and validity of user information/contents in the tender documents shall rest with the authorized user of the account i.e. the concerened tender inviting authority is responsible for tender administration. NIC shall be responsible only for ensuring the system performance and security.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary" data-dismiss="modal" onclick="document.getElementById('checkbox').checked=!document.getElementById('checkbox').checked;">I Agree</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

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