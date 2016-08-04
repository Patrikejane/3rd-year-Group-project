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

    function getnotcount(){
        global $mysqli;
        $sqlQuery = "SELECT COUNT(*) AS notcount FROM notification WHERE action = 'fromadmin'";
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

    function reply($reply,$reciever,$id){
        global $mysqli;
        $query = "UPDATE notification_all SET reply = '".$reply."' , reciever = '". $reciever."', dateReply = NOW() WHERE notID = '".$id."'  ";
        $result = $mysqli->query($query);
        if ($result != 1) {
            echo '<script language="javascript">';
            echo 'alertify.alert("Sorry Message cannot send!")';
            echo '</script>';

        }
        else{
            $query1 = "UPDATE notification SET action = 'toteacher' , date = NOW() WHERE notID = '". $id."'";
            $result1 = $mysqli->query($query1);
            
            echo '<script language="javascript">
                alertify.confirm("Message Send successfully!", function (e) {
                if (e) {
                    window.location.href="ministryOfficerHome.php";
                }
                });
            </script>';
        }
    }

    function school($id){
        global $mysqli;
        $sqlQuery = "SELECT sender FROM notification_all WHERE notID = '".$id."'";
        $Result = $mysqli->query($sqlQuery);
        $row =mysqli_fetch_assoc($Result);
        $sender_nic = $row['sender'];
        $sqlQuery = "SELECT DISTINCT school.schoolName AS schoolname FROM school JOIN employee ON school.schoolID = employee.schoolID WHERE employee.nic = '".$sender_nic."'";
        $Result = $mysqli->query($sqlQuery);
        $fetch_result = mysqli_fetch_array($Result);
        $sender_school = $fetch_result['schoolname'];
        return $sender_school;
    }

    function name($id){
        global $mysqli;
        $sqlQuery = "SELECT sender FROM notification_all WHERE notID = '".$id."'";
        $Result = $mysqli->query($sqlQuery);
        $row =mysqli_fetch_assoc($Result);
        $sender_nic = $row['sender'];
        $query = "SELECT nameWithInitials FROM employee WHERE nic = '".$sender_nic."'";
        $Result1 = $mysqli->query($query);
        $fetch_result1 = mysqli_fetch_array($Result1);
        $sender = $fetch_result1['nameWithInitials'];
        return $sender;
    }

    function message($id){
        global $mysqli;
        $sqlQuery = "SELECT description FROM notification_all WHERE notID = '".$id."'";
        $Result = $mysqli->query($sqlQuery);
        $fetch_result = mysqli_fetch_array($Result);
        $msg = $fetch_result['description'];
        return $msg;
    }

    function gennotid(){
        global $mysqli;
        $query = "SELECT COUNT(*) AS count FROM notification_all";
        $result = $mysqli->query($query);
        $fetch_result = mysqli_fetch_array($result);
        $res = $fetch_result['count'] +1;
        $out = "not".$res ;


        return $out;

    }

    function sendrequest($notid,$des,$sender){
        global $mysqli;
        $query = "INSERT INTO notification (notid, actor, description, sender, receive_date,action,email) VALUES ('$notid','Academic_ Staff','$des','$sender',NOW(),'fromacademic','$sender')";
        $result = $mysqli->query($query);

        $query1 = "INSERT INTO notification_all (notid, actor, description, sender, receive_date,action,email) VALUES ('$notid','Academic_ Staff','$des','$sender',NOW(),'fromacademic','$sender')";
        $result1 = $mysqli->query($query1);

        if($result1) {echo '<script type="text/javascript">
								setTimeout(function(){
	        						swal({title: "", text: "Your request has been sent.", type: "success"},
		        						function(isConfirm){
											if(isConfirm){
												window.location.href = "homeacademic.php";
											}
										}
	        						)
	        					},100);
	        				</script>';
	        			}


    } 

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Tender</title>
<!-- css file for sweetalert -->
<link rel="stylesheet" href="sweetalert/dist/sweetalert.css" />
</head>
<body>

<!-- js file for sweetalert -->
<script src="sweetalert/dist/sweetalert.min.js"></script>

</body>
</html>
