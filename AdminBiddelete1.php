<?php 
include 'db.php';

if(isset($_GET['id'])){
	$sql="delete from impending_bid where Row_Id=".$_GET['id'];
	if(mysqli_query($db,$sql)){
		header('Location:AdminBidindex1.php');
	}else{
		echo "Error".mysqli_error($db);
	}
}
?>