<?php

	include('db.php');


if(isset($_GET['id'])) /* get the id */
{
	$user_id=$_GET['id'];

	$sql = "DELETE FROM user WHERE user_id=$user_id";

  	$result = mysqli_query($db, $sql);

  	if($result)
	{
		header('location:adminUsers.php'); /* Redirected to adminCompanies.php file */
	}

}

?>