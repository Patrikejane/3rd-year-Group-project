<?php
require("classes.php");
include ('db.php');
$not = new classes();
$x = $not->getnotcountTeacher1();



?>
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning"><?php echo $not->getnotcountTeacher(); ?></span>
            </a>

            <ul class="dropdown-menu">

              <ul class="dropdown-menu message-dropdown" style="width: 382.22222px;">
                    
                   <div id="notificationContainer">

                        <div id="notificationTitle">Notifications</div>
                        <div id="notificationsBody" class="notifications" runat="server">
                        <?php echo "yehen"; ?>
                          
                        <?php 
                            
                           $not->notResualtTeacher($_SESSION["email"]);
                        ?>
                        </div>
                    </div>
                </ul>
              
              <li class="footer"><a href="#">View all</a></li>
            </ul>