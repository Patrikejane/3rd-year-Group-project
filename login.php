<?php
	
	include("db.php"); //Establishing connection with our database
	
	$error = ""; //Variable for storing our errors.
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["email"]) || empty($_POST["password"]))
		{
			$error = "Both fields are required.";
		}else
		{
			// Define $email and $password
			$email=$_POST['email'];
			$password=$_POST['password'];

			// To protect from MySQL injection
			$email = stripslashes($email);
			$password = stripslashes($password);
			$email = mysqli_real_escape_string($db, $email);
			$password = mysqli_real_escape_string($db, $password);
			$password = md5($password);
			
			//Check username and password from database
			$sql="SELECT email,first_name,last_name FROM user WHERE email='$email' and password='$password'";
			//$sql1 = "SELECT first_name FROM user WHERE email='$email'";
			
			$result=mysqli_query($db,$sql);
			//$result1=mysqli_query($db,$sql1);

			$rowcount=mysqli_num_rows($result);

			//If email and password exist in our database then create a session.
			//Otherwise echo error.

			if($rowcount == 1){

				while ($row = mysqli_fetch_assoc($result)) {

                    $first_name = $row["first_name"];
                    $last_name = $row["last_name"];
                    
                }

                $username = $first_name." ".$last_name;
            	$_SESSION['username'] = $username; 
            	$_SESSION['email'] = $email; // Initializing Session
				if(!empty($_POST["remember"])) {
					setcookie ("user_email",$_POST["email"],time()+ (10 * 365 * 24 * 60 * 60));
					setcookie ("user_password",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
				} else {
					if(isset($_COOKIE["user_email"])) {
						setcookie ("user_email","");
					}
					if(isset($_COOKIE["user_password"])) {
						setcookie ("user_password","");
					}
				}            	
	            	
	            header("location: home.php"); // Redirecting To Other Page

	        }
            else{
					echo 	'<script type="text/javascript">
								setTimeout(function(){
									swal("", "Incorrect username or password.", "error");
								},100);
							</script>';
			}
		

		}
	}

?>