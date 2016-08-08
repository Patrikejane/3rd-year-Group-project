<?php
include('db.php');
if(isset($_GET['action'])){

    if($_GET['action']=="reset"){

        $encrypt = mysqli_real_escape_string($db,$_GET['encrypt']);
        $query = "SELECT email FROM user where md5(email)='".$encrypt."'";
        $result = mysqli_query($db,$query);
        $rowcount=mysqli_num_rows($result);

        if($rowcount == 1){

        }
        else{

            echo 'Invalid key please try again. <a href="http://localhost/gitProc/3rd-year-Group-project/forgotPassword.php">Forgot Password?</a>';
        }
    }
}
elseif(isset($_POST['action'])){
    
    $encrypt      = mysqli_real_escape_string($db,$_POST['action']);
    $password     = mysqli_real_escape_string($db,$_POST['password']);
    $query = "SELECT email FROM user where md5(email)='".$encrypt."'"; 
    $result = mysqli_query($db,$query);
    $rowcount=mysqli_num_rows($result);
    $Results = mysqli_fetch_array($result);

    if($rowcount==1){

        $query = "update user set password='".md5($password)."' where email='".$Results['email']."'";
        mysqli_query($db,$query);

        echo 'Your password changed sucessfully <a href="http://localhost/gitProc/3rd-year-Group-project/index/index.php">click here to login</a>';

    }
    else{

        echo 'Invalid key please try again. <a href="http://localhost/gitProc/3rd-year-Group-project/forgotPassword.php">Forgot Password?</a>';

    }
}
else{

    header("location: index/index.php");

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
</head>
<body>

    <form action="resetPassword.php" method="post" id="reset">
		<input id="password" name="password" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 6 characters' : ''); if(this.checkValidity()) form.password2.pattern = this.value;" placeholder="Enter new password" required>
		<input id="password2" name="password2" type="password" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Please enter the same Password as above' : '');" placeholder="Re-type new password" required>
		<?php
		 echo '<input name="action" type="hidden" value="'.$encrypt.'" /></p>';
		?>
    	<button type="submit" name = "submit" onclick="resetPassword();">RESET PASSWORD</button>
	</form>



<!-- jQuery 2.2.0 -->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script type="text/javascript">
function resetPassword(){
    
    $( "#reset" ).submit();
    
}
</script>

</body>
</html>
