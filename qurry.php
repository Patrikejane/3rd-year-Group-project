<?php

class dbQuery{
include 'db.php';

public function getNotification(){
	$query = "SELECT * FROM notification_all";
    $result = mysqli_query($db,$query);
	if(!result) die('Invalid Query');
	return $result;
}


}

?>