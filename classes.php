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


    function notResualtTeacher($nic){
        global $mysqli;
        $sqlQuery = "SELECT * FROM notification WHERE email = '".$email."' ORDER BY notID DESC";
        $Result = $mysqli->query($sqlQuery);
        $output="";

        
            if (mysqli_num_rows($Result) > 0) {
                while ($row = mysqli_fetch_assoc($Result)) {
                    $notid = $row["notID"];
                    $type = $row["type"];
                    $action = $row["action"];
                    $des = $row["description"];
                    $date = $row["date"];
                    if (strcmp($action, 'fromacademic') == 0) {
                    $output .=   "<div id= '". $notid."' class='notification_teacher' ".
                                "   <div class='not-content-box col-md-10'>".

                                "       You have a Message     ".
                            //    "        NotID <strong>'". $notid ."' </strong> Type '". $type ."' , Action '". $action ."' ".
                                "        <div class='col-md-offset-7 col-md-5' style='padding-right: 0px;'>".$date."</div>".
                                "   </div>";
                                //"</div>";
                    }
                }
            }
            echo $output;      
        
                          
    } 

}

?>