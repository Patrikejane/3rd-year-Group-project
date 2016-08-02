<?php
require 'PHPMailer/PHPMailerAutoload.php';
include('db.php');

if(isset($_POST["submit"]))
{
    $email      = mysqli_real_escape_string($db,$_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
    {
        echo "Invalid email address please type a valid email!!";
    }
    else
    {
        $query = "SELECT email FROM user where email='$email'";
        $result = mysqli_query($db,$query);
        $rowcount=mysqli_num_rows($result);
        $Results = mysqli_fetch_array($result);

        if($rowcount == 1){

        	$encrypt = md5($Results['email']);

			$mail = new PHPMailer;

		    $mail->isSMTP();                            // Set mailer to use SMTP
		    $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
		    $mail->SMTPAuth = true;                     // Enable SMTP authentication
		    $mail->Username = 'eprocucsc@gmail.com';          // SMTP username
		    $mail->Password = '0602416161'; // SMTP password
		    $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
		    $mail->Port = 587;                          // TCP port to connect to

		    $mail->setFrom('eprocucsc@gmail.com', 'E-Proc');
		    $mail->addReplyTo('eprocucsc@gmail.com', 'E-Proc');
		    $mail->addAddress($email);   // Add a recipient
		    //$mail->addCC('cc@example.com');
		    //$mail->addBCC('bcc@example.com');

		    $mail->isHTML(true);  // Set email format to HTML

		    $bodyContent = '<h1>Forgot password?</h1>';
		    $bodyContent .= '<p>Click here to reset your password http://localhost/gitProc/3rd-year-Group-project/resetPassword.php?encrypt='.$encrypt.'&action=reset</p>';

		    $mail->Subject = 'Forgot Password';
		    $mail->Body    = $bodyContent;
		    

		    if(!$mail->send()) {
		        echo 'Email could not be sent.';
		        echo 'Mailer Error: ' . $mail->ErrorInfo;
		    } else {
		        echo 'Email has been sent to '.$email;
		    }            
        }
        else{

            echo "Account not found please signup now!!";
        }
    }
    
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
</head>
<body>
<form action="" method="post">
	<input type="email" name="email" placeholder="Email to get password" required>
	<button type="submit" name = "submit">RESET PASSWORD</button>
</form>
</body>
</html>