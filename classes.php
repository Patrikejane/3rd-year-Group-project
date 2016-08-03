<?php
$mysqli = new mysqli("localhost", "root", "yehen", "proc");

class classes{

	function getnotcountTeacher(){
        global $mysqli;
        $sqlQuery = "SELECT COUNT(*) AS notcount FROM notification WHERE action = 'fromacademic'";
        $Result = $mysqli->query($sqlQuery);
        $fetch_result = mysqli_fetch_array($Result);
        $notcount = $fetch_result['notcount'];
        if ($notcount == 0) {
            $notcount = "";
        }
        return $notcount;
    }

}

?>