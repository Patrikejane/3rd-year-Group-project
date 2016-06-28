<?php
	session_start();

	include("db.php");
	
	if (isset($_POST["submit"])) {
		

		$query = "SELECT COUNT(*) AS count FROM notification";
		$result = mysqli_query($db,$query);
        $fetch_result = mysqli_fetch_array($result);
        $res = $fetch_result['count'] +1;
        $out = "not".$res ;
        

        

		
		$desc = $_POST["description"];
		$sender = "yehen";
	    $id = $out;
	    //$date = date('Y-m-d H:i:s');

	    $query1 = "INSERT INTO notification (notid, actor, description, sender, receive_date) VALUES ('$id','Academic_ Staff','$desc','$sender',NOW())";

	    $result1 = mysqli_query($db,$query1);
	    echo $_SESSION['email'];
	    echo $_SESSION['first_name'];

	    

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
	    }
	    
	
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Tender</title>
<!-- css file for sweetalert -->
<link rel="stylesheet" href="sweetalert/dist/sweetalert.css" />
</head>
<body>

<!-- js file for sweetalert -->
<script src="sweetalert/dist/sweetalert.min.js"></script>

</body>
</html>

