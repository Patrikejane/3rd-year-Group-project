<?php
include 'db.php';

if(isset($_POST['submit'])){
    $sql="update openbid set Bid_Id='".$_POST['Bid_Id']."',Bid_Name='".$_POST['Bid_Name']."' where Row_Id='".$_POST['Row_Id']."'";
    //$result=mysqli_query($con,$sql);
    //echo "$result";
    if(mysqli_query($db,$sql)){
        echo "done";
        header('Location:AdminBidindex3.php');
    }else{
        echo "Error".mysqli_error($db);
    }
}

$id='';
$Bid_Id='';
$Bid_Name='';
if(isset($_GET['id'])){
    //$sql="select Row_Id,Bid_Id,Bid_Name from openbid where Row_Id=".$_GET['id'];
    $result=mysqli_query($db,"select Row_Id,Bid_Id,Bid_Name from openbid where Row_Id=".$_GET['id']);
    if(mysqli_num_rows($result) >0){
        $row=mysqli_fetch_assoc($result);
        $id=$row['Row_Id'];
        $Bid_Id=$row['Bid_Id'];
        $Bid_Name=$row['Bid_Name'];
        
    }
}



?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Company Detail Form</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- css file for sweetalert -->
  <link rel="stylesheet" href="sweetalert/dist/sweetalert.css" />

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
<style type="text/css">
.form-style-7{
    max-width:400px;
    margin:50px auto;
    background:#fff;
    border-radius:2px;
    padding:20px;
    font-family: Georgia, "Times New Roman", Times, serif;
}
.form-style-7 h1{
    display: block;
    text-align: center;
    padding: 0;
    margin: 0px 0px 20px 0px;
    color: #5C5C5C;
    font-size:x-large;
}
.form-style-7 ul{
    list-style:none;
    padding:0;
    margin:0;   
}
.form-style-7 li{
    display: block;
    padding: 9px;
    border:1px solid #DDDDDD;
    margin-bottom: 30px;
    border-radius: 3px;
}
.form-style-7 li:last-child{
    border:none;
    margin-bottom: 0px;
    text-align: center;
}
.form-style-7 li > label{
    display: block;
    float: left;
    margin-top: -19px;
    background: #FFFFFF;
    height: 14px;
    padding: 2px 5px 2px 5px;
    color: #B9B9B9;
    font-size: 14px;
    overflow: hidden;
    font-family: Arial, Helvetica, sans-serif;
}
.form-style-7 input[type="text"],
.form-style-7 input[type="date"],
.form-style-7 input[type="datetime"],
.form-style-7 input[type="email"],
.form-style-7 input[type="number"],
.form-style-7 input[type="search"],
.form-style-7 input[type="time"],
.form-style-7 input[type="url"],
.form-style-7 input[type="password"],
.form-style-7 textarea,
.form-style-7 select 
{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    display: block;
    outline: none;
    border: none;
    height: 25px;
    line-height: 25px;
    font-size: 16px;
    padding: 0;
    font-family: Georgia, "Times New Roman", Times, serif;
}
.form-style-7 input[type="text"]:focus,
.form-style-7 input[type="date"]:focus,
.form-style-7 input[type="datetime"]:focus,
.form-style-7 input[type="email"]:focus,
.form-style-7 input[type="number"]:focus,
.form-style-7 input[type="search"]:focus,
.form-style-7 input[type="time"]:focus,
.form-style-7 input[type="url"]:focus,
.form-style-7 input[type="password"]:focus,
.form-style-7 textarea:focus,
.form-style-7 select:focus 
{
}
.form-style-7 li > span{
    background: #F3F3F3;
    display: block;
    padding: 3px;
    margin: 0 -9px -9px -9px;
    text-align: center;
    color: #C0C0C0;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 11px;
}
.form-style-7 textarea{
    resize:none;
}
.form-style-7 input[type="submit"],
.form-style-7 input[type="button"]{
    background: #2471FF;
    border: none;
    padding: 10px 20px 10px 20px;
    border-bottom: 3px solid #5994FF;
    border-radius: 3px;
    color: #D2E2FF;
}
.form-style-7 input[type="submit"]:hover,
.form-style-7 input[type="button"]:hover{
    background: #6B9FFF;
    color:#fff;
}
</style>
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<!--<div class="container">-->
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

          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
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
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"> <?php echo $_SESSION['username']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['username']; ?>
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
  <aside class="main-sidebar" style="background-color:#020816;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        
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
        <!--<li>
          <a href="adminBids.php">
            <i class="fa fa-legal"></i> <span>Bids</span>
          </a>
        </li>-->
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-legal"></i>
            <span>Bids</span>
            <span class="label label-primary pull-right">3</span>
          </a>
          <ul class="treeview-menu">
            <li><a href="AdminBidindex1.php"><i class="fa fa-circle-o"></i>Impending Bids</a></li>
           
            <li><a href="AdminBidindex2.php"><i class="fa fa-circle-o"></i>Evaluating Bids</a></li>
            
            <li class="active"><a href="AdminBidindex3.php"><i class="fa fa-circle-o"></i>Open Bids</a></li>
          </ul>
        </li>
        <li>
          <a href="#">
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Open Bids
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Open Bids</a></li>
        
      </ol>
    </section>
    <section class="content">

        <form class="form-style-7" action="" method="POST">
        <ul>
        <li>
            <label for="id">Bid Id</label>
            <input type="text" name="Bid_Id" id="Bid_Id" maxlength="100" >
            <span>Enter Bid Id </span>
        </li>
        <li>
            <label for="name">Bid Name</label>
            <input type="text" name="Bid_Name" id="Bid_Name" maxlength="100" >
            <span>Enter Bid Name</span>
        </li>
        	<input type="hidden" name="Row_Id" id="Row_Id">
        <li>
            <input type="submit" value="submit" name="submit" id="submit" >
        </li>
        	
        </ul>
        </form>

    </section>
    </div>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<!-- js file for sweetalert -->
<script src="sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>



