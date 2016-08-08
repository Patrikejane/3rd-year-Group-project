<?php
	
	
	
	include ('db.php');
	
	if (isset($_POST["submit"])) {
		

		            

		
		$desc = $_POST["description"];
		$sender = "yehen";
	    $sender = $_SESSION['email'];
	    require("classes.php");
	    $not = new classes();
        $id = $not->gennotid();
        $not->sendrequest($id,$desc,$sender);
	    //$date = date('Y-m-d H:i:s');

	    /*$query1 = "INSERT INTO notification (notid, actor, description, sender, receive_date,action,email) VALUES ('$id','Academic_ Staff','$desc','$sender',NOW(),'fromacademic','$sender')";

	    $query2 = "INSERT INTO notification_all (notid, actor, description, sender, receive_date,action,email) VALUES ('$id','Academic_ Staff','$desc','$sender',NOW(),'fromacademic','$sender')";


	    $result1 = mysqli_query($db,$query1);
	    $result2 = mysqli_query($db,$query2);
	    

	    

	    if ($result1) {
	    	echo 	'<script type="text/javascript">
								setTimeout(function(){
	        						swal({title: "", text: "Your request has been sent.", type: "success"},
		        						function(isConfirm){
											if(isConfirm){
												window.location.href = "homeacademic.php";
											}
										}
	        						)
	        					},100);
	        				</script>';
	    }*/
	    
	
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>E-Proc UCSC | Request</title>
<!-- css file for sweetalert -->
<link rel="stylesheet" href="sweetalert/dist/sweetalert.css" />
</head>
<body>

<!-- js file for sweetalert -->
<script src="sweetalert/dist/sweetalert.min.js"></script>

</body>
</html>

