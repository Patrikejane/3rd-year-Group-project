 <?php

  include('db.php');
  
?>
 <header class="main-header">
    <!-- Logo -->
    <a href="home.php" class="logo" style="background-color:#020816;">
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

          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu" id="#mail_notificatoin_bar">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
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
        
        <li>
          <a href="home.php">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
        </li>
        <li>
          <a href="published.php">
            <i class="fa fa-files-o"></i> <span>Tenders</span>
          </a>
        </li>
        <li>
          <a href="Companies.php">
            <i class="fa fa-building"></i> <span>Companies</span>
          </a>
        </li>
        <li>
          <a href="Bids.php">
            <i class="fa fa-legal"></i> <span>Bids</span>
          </a>
        </li>
        <li>
          <a href="Reports.php">
            <i class="fa fa-file-text"></i> <span>Reports</span>
          </a>
        </li>
        <li>
          <a href="Help.php">
            <i class="fa fa-question-circle"></i> <span>Help</span>
          </a>
        </li>
        <li>
          <a href="About.php">
            <i class="fa fa-info-circle"></i> <span>About us</span>
          </a>
        </li>
        <li>
          <a href="Contact.php">
            <i class="fa fa-phone-square"></i> <span>Contact us</span>
          </a>
        </li>
        
    </section>
    <!-- /.sidebar -->
  </aside>
  <script src="dist/js/script.js"></script>