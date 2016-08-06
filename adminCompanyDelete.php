<?php

	include('db.php');


if(isset($_GET['id'])) /* get the id */
{
	$Supplier_ID=$_GET['id'];

	$sql = "DELETE FROM supplier WHERE Supplier_ID=$Supplier_ID";

  	$result = mysqli_query($db, $sql);

  	if($result)
	{
		header('location:adminCompanies.php'); /* Redirected to adminCompanies.php file */
	}

}

?>