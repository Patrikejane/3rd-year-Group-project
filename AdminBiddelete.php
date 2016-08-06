<?php 
include 'db.php';

if(isset($_GET['id'])){
	$sql="delete from openbid where Row_Id=".$_GET['id'];
	if(mysqli_query($db,$sql)){
		header('Location:AdminBidindex3.php');
	}else{
		echo "Error".mysqli_error($db);
	}
}
?>