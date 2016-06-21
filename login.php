<?php
	session_start();
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
			$sql="SELECT email FROM user WHERE email='$email' and password='$password'";
			$result=mysqli_query($db,$sql);
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			
			//If email and password exist in our database then create a session.
			//Otherwise echo error.
			
			if(mysqli_num_rows($result) == 1)
			{
				$_SESSION['email'] = $email; // Initializing Session
				header("location: ../home.php"); // Redirecting To Other Page
			}else
			{
				echo 	'<script type="text/javascript">
							setTimeout(function(){
								sweetAlert("", "Incorrect username or password.", "error")
							},100);
					 	</script>';
			}

		}
	}

?>