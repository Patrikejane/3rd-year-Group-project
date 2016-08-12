<?php

	include('db.php');

    if(isset($_POST["apprrovalstat"])){

    	$data = $_GET["data"];

        //echo $_POST['apprrovalstat'];
        $query = mysqli_query($db,"UPDATE user SET type = '". $_POST['apprrovalstat'] ."' WHERE user_id='$data' ");
        if($query){
            header('location:adminUsers.php'); /* Redirected to adminUsers.php file */
        }

    }

?>