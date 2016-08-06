<?php 
include 'db.php';

if(isset($_GET['id'])){
	$sql="delete from evaluating_bid where Row_Id=".$_GET['id'];
	if(mysqli_query($db,$sql)){
		header('Location:AdminBidindex2.php');
	}else{
		echo "Error".mysqli_error($db);
	}
}
?>