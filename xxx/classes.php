<?php
$mysqli = new mysqli("localhost", "root", "", "proc");

class classes{

    function getnotcountTeacher1(){
        global $mysqli;
        $sqlQuery = "SELECT * FROM notification WHERE action = 'fromacademic'";
        $Result = $mysqli->query($sqlQuery);
        /*$rows = array();
        while($row = mysql_fetch_array($Result)){
            $rows[] = $row;
        } */       
        return $Result;
    }

	function getnotcountTeacher(){
        global $mysqli;
        $email = $_SESSION['email'];
        $sqlQuery = "SELECT COUNT(*) AS notcount FROM notification WHERE action = 'fromadmin' AND sender = '$email'  ";
        $Result = $mysqli->query($sqlQuery);
        $fetch_result = mysqli_fetch_array($Result);
        $notcount = $fetch_result['notcount'];
        if ($notcount == 0) {
            $notcount = "";
        }
        return $notcount;
    }
///////////------- admin notification
    function getnotcount(){
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

    function notResualt(){
        global $mysqli;
        $sqlQuery = "SELECT * FROM notification ORDER BY notid DESC";
        $Result = $mysqli->query($sqlQuery);
        $output="";

        
            if (mysqli_num_rows($Result) > 0) {
                while ($row = mysqli_fetch_assoc($Result)) {
                    $notid = $row["notid"];
                    //$type = $row["type"];
                    $action = $row["action"];
                    $des = $row["description"];
                    $date = $row["receive_date"];
                    if (strcmp($action, 'fromacademic') == 0) {
                    $output .=   "<div id= '". $notid."' class='notification' ".
                                "   <div class='not-content-box col-md-10'>".

                                "       You have a request     ".
                            //    "        NotID <strong>'". $notid ."' </strong> Type '". $type ."' , Action '". $action ."' ".
                                "        <div class='col-md-offset-7 col-md-5' style='padding-right: 0px;'>".$date."</div>".
                                "   </div>";
                                //"</div>";
                    }
                }
            }   
        echo $output;      
        
                          
    }

    


    function notResualtTeacher($email){
        echo '<script language="javascript">';
        echo 'alertify.alert("Sorry Message cannot send!")';
        echo '</script>';
        global $mysqli;
        $sqlQuery = "SELECT * FROM notification WHERE email = '".$email."' ORDER BY notid DESC";
        $Result = $mysqli->query($sqlQuery);
        $output="";

        
            if (mysqli_num_rows($Result) > 0) {
                while ($row = mysqli_fetch_assoc($Result)) {
                    $notid = $row["notid"];
                    //$type = $row["type"];
                    $action = $row["action"];
                    $des = $row["description"];
                    $date = $row["receive_date"];
                    if (strcmp($action, 'fromadmin') == 0) {
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

    function reply($reply,$receiver,$id){
        global $mysqli;
        $query = "UPDATE notification_all SET  action = 'fromadmin' ,reply = '".$reply."' , receiver = '". $receiver."', replydate = NOW() WHERE notid = '".$id."'  ";
        $result = $mysqli->query($query);
        if ($result != 1) {
            echo '<script type="text/javascript">
                                setTimeout(function(){
                                    swal({title: "", text: "Sorry Message cannot sent.", type: "success"},
                                        function(isConfirm){
                                            if(isConfirm){
                                                window.location.href = "adminHome.php";
                                            }
                                        }
                                    )
                                },100);
                            </script>';


        }
        else{
            $query1 = "UPDATE notification SET action = 'fromadmin' , receive_date = NOW() WHERE notid = '". $id."'";
            $result1 = $mysqli->query($query1);
            
            echo '<script type="text/javascript">
                                setTimeout(function(){
                                    swal({title: "", text: "Message sent successfully.", type: "success"},
                                        function(isConfirm){
                                            if(isConfirm){
                                                window.location.href = "adminHome.php";
                                            }
                                        }
                                    )
                                },100);
                            </script>';
        }
    }

   

    function name($id){
        global $mysqli;
        $sqlQuery = "SELECT sender FROM notification_all WHERE notID = '".$id."'";
        $Result = $mysqli->query($sqlQuery);
        $row =mysqli_fetch_assoc($Result);
        $sender_email = $row['sender'];
        $query = "SELECT first_name,last_name FROM user WHERE email = '".$sender_email."'";
        $Result1 = $mysqli->query($query);
        $fetch_result1 = mysqli_fetch_array($Result1);
        $sender = $fetch_result1['first_name']." ". $fetch_result1['last_name'];
        
        return $sender;
    }

    function email($id){
        global $mysqli;
        $sqlQuery = "SELECT sender FROM notification_all WHERE notID = '".$id."'";
        $Result = $mysqli->query($sqlQuery);
        $row =mysqli_fetch_assoc($Result);
        $sender_email = $row['sender'];
        
        
        return $sender_email;
    }


    function message($id){
        global $mysqli;
        $sqlQuery = "SELECT description FROM notification_all WHERE notid = '".$id."'";
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

    function deletemsg($id){
        global $mysqli;
        $query = "DELETE FROM notification WHERE notid = '".$id."'";
        $result = $mysqli->query($query);
        echo '<script type="text/javascript">
                                setTimeout(function(){
                                    swal({title: "", text: "Your Message has deleted.", type: "success"},
                                        function(isConfirm){
                                            if(isConfirm){
                                                window.location.href = "homeacademic.php";
                                            }
                                        }
                                    )
                                },100);
                            </script>';

    }

    function viewreply($id){
    
        global $mysqli;
        $sqlQuery = "SELECT reply FROM notification_all WHERE notid = '".$id."'";
        //$query1 = "UPDATE notification_all SET state = '1' WHERE notid = '". $id."'";

        $Result = $mysqli->query($sqlQuery);
        $fetch_result = mysqli_fetch_array($Result);
        $msg = $fetch_result['reply'];
        //$Result1 = $mysqli->query($query1);
        return $msg;
    } 

    function getmessagedate($id){
        global $mysqli;
        $query = "SELECT * FROM notification_all WHERE notid = '".$id."'";
        $result = $mysqli->query($query);
        $fetch_result = mysqli_fetch_array($result);
        $res = $fetch_result['receive_date'];
        return $res;
    }

    function getmessagereplydate($id){
        global $mysqli;
        $query = "SELECT * FROM notification_all WHERE notid = '".$id."'";
        $result = $mysqli->query($query);
        $fetch_result = mysqli_fetch_array($result);
        $res = $fetch_result['replydate'];
        return $res;
    }

    function viewallnotifications(){
        global $mysqli;
        $sqlQuery = "SELECT * FROM notification_all ORDER BY notid DESC";
        $Result = $mysqli->query($sqlQuery);
        
        $output="";
        if (mysqli_num_rows($Result) > 0) {
            while ($row = mysqli_fetch_assoc($Result)) {
                $notid = $row["notid"];
                //$type = $row["type"];
                $sender_email = $row["sender"];
                $des = $row["description"];
                $date = $row["receive_date"];

                $query = "SELECT first_name,last_name FROM user WHERE email = '".$sender_email."'";
                $Result1 = $mysqli->query($query);
                $fetch_result1 = mysqli_fetch_array($Result1);
                $name = $fetch_result1['first_name']." ". $fetch_result1['last_name'];
                
                $output .=   "<div id= '". $notid."' class='notificationAll' ".
                            "   <div class='not-content-box col-md-10'>".

                            "       ".$name." send this request ".
                        //    "        NotID <strong>'". $notid ."' </strong> Type '". $type ."' , Action '". $action ."' ".
                            "        <div class='col-md-offset-7 col-md-5' style='padding-right: 0px;'>".$date."</div>".
                            "   </div>";
                            //"</div>";
                
            }
        }   
        echo $output;                


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
