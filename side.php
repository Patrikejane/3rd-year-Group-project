 <?php
 

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
                   
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['username']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

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
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="home.php">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Tenders</span>
            <span class="label label-primary pull-right">3</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="Tenderlist.php"><i class="fa fa-circle-o"></i> Tender List</a></li>
           
            <li><a href="Published.php"><i class="fa fa-circle-o"></i> Published Tenders</a></li>
            
          </ul>
        </li>
        <li>
          <a href="Companies.php">
            <i class="fa fa-building"></i> <span>Companies</span>
          </a>
        </li>
        <li>
          <a href="Bids.php">
            <i class="fa fa-th"></i> <span>Bids</span>
          </a>
        </li>
        <li>
          <a href="Reports.php">
            <i class="fa fa-th"></i> <span>Reports</span>
          </a>
        </li>
        <li>
          <a href="Help.php">
            <i class="fa fa-th"></i> <span>Help</span>
          </a>
        </li>
        <li>
          <a href="About.php">
            <i class="fa fa-th"></i> <span>About us</span>
          </a>
        </li>
        <li>
          <a href="Contact.php">
            <i class="fa fa-th"></i> <span>Contact us</span>
          </a>
        </li>
        
    </section>
    <!-- /.sidebar -->
  </aside>