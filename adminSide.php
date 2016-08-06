 <?php
require("classes.php");
include ('db.php');
$not = new classes();
?>
 <header class="main-header">
    <!-- Logo -->
    <a href="adminHome.php" class="logo" style="background-color:#020816;">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>E</b>Proc</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Easy</b>Proc</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" style="background-color:#020816;">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

            <li class="dropdown" id="notification_li">
                    <span id="notification_count" runat="server"><?php echo $not->getnotcount(); ?></span>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown" style="width: 382.22222px;">
                        <li class="msg">
                          <a href="#" class="myDropDown" runat="server">
                            <?php 
                               $not->notResualt();
                            ?>
                            
                          </a>
                        </li>
                        <!--<div id="notificationContainer">
                            <div id="notificationTitle">Notifications</div>
                            <div id="notificationsBody" class="notifications" runat="server">

                            <?php 
                               $not->notResualtTeacher($_SESSION["email"]);
                            ?>
                            </div>
                        </div>-->
                        
                    </ul>
                </li>
                   
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/avatar5-160x160.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['username']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/avatar5-160x160.png" class="img-circle" alt="User Image">

                <p>
                  <?php
                  
                  echo $_SESSION['username'];
                  ?>
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
                            
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" style="background-color:#020816";>
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <!--<li class="header">MAIN NAVIGATION</li>-->
        <li>
          <a href="adminHome.php">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Tenders</span>
            <span class="label label-primary pull-right">2</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="adminTenderlist.php"><i class="fa fa-circle-o"></i>Publish Tender</a></li>
           
            <li><a href="adminPublished.php"><i class="fa fa-circle-o"></i>Published Tenders</a></li>
            
          </ul>
        </li>
        <!--<li>
          <a href="adminCompanies.php">
            <i class="fa fa-building"></i> <span>Companies</span>
          </a>
        </li>-->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-building"></i>
            <span>Companies</span>
            <span class="label label-primary pull-right">2</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="adminCompanyDetailForm.php"><i class="fa fa-circle-o"></i>Add Company</a></li>
           
            <li><a href="adminCompanies.php"><i class="fa fa-circle-o"></i>Added Companies</a></li>
            
          </ul>
        </li>        
        <li>
          <a href="adminBids.php">
            <i class="fa fa-legal"></i> <span>Bids</span>
          </a>
        </li>
        <li>
          <a href="adminRequest.php">
            <i class="fa fa-envelope"></i> <span>Requests</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-reply"></i> <span>Replies</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-users"></i> <span>Users</span>
          </a>
        </li>
        
        
    </section>
    <!-- /.sidebar -->
  </aside>