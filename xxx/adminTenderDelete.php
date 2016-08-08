<?php

	include('db.php');


if(isset($_GET['id'])) /* get the id */
{
	$tender_id=$_GET['id'];

	$sql = "DELETE FROM tenderdocument WHERE tender_id=$tender_id";

  	$result = mysqli_query($db, $sql);

  	if($result)
	{
		header('location:adminPublished.php'); /* Redirected to adminPublished.php file */
	}

}

?>