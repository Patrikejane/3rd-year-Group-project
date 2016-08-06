<!DOCTYPE html>
<?php
    require("classes.php");
    include ('db.php');
    $not = new classes();

    $sql="SELECT tender_id,tender_ref_number,tender_type,no_covers,re_bid_submission FROM tenderdocument";
    $result = mysqli_query($db,$sql);

    $num_rows = mysqli_num_rows($result);

?>


<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-Proc UCSC | Admin Published Tenders</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
     <link href="notification.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
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
                      <span class="hidden-xs"> <?php echo $_SESSION['username']; ?></span>
                    </a>
                    <ul class="dropdown-menu">
                      <!-- User image -->
                      <li class="user-header">
                        <img src="dist/img/avatar5-160x160.png" class="img-circle" alt="User Image">

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
        <li class="treeview active">
            <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Tenders</span>
                <span class="label label-primary pull-right">2</span>
            </a>
            <ul class="treeview-menu">
                <li><a href="adminTenderlist.php"><i class="fa fa-circle-o"></i>Publish Tender</a></li>
                
                <li class="active"><a href="adminPublished.php"><i class="fa fa-circle-o"></i>Published Tenders</a></li>

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
        <li>
            <a href="adminBids.php">
                <i class="fa fa-legal"></i> <span>Bids</span>
            </a>
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
    </ul>
</section>
</aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Published Tenders
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Published Tenders</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <!--<div class="box">
              <div class="panel panel-primary">
                  <div class="panel-heading">SEARCH</div>
                  <div class="panel-body">
                      <div class="col-lg-6">
                          <div class="form-group">
                              <label for="usr">Tender ID :</label>
                              <input type="text" class="form-control" id="usr">
                          </div>
                          <div class="form-group">
                              <label for="pwd">Keyword :</label>
                              <input type="password" class="form-control" id="pwd">
                          </div>
                          <div class="form-group">
                              <button type="button" class="btn btn-info">Clear</button>
                              <button type="button" class="btn btn-success">Search</button>

                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="form-group">
                              <label for="sel1">Category :</label>
                              <select class="form-control" id="sel1">
                                  <option disabled selected value>Select a Category</option>
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                              </select>
                          </div>
                      </div>



                  </div>
              </div>
             /.box-body 
          </div>-->
          <!-- /.box -->


          <div class="box">
            <!--<div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>-->
            <!-- /.box-header -->
            <div class="box-body">
            <?php
            if($result = mysqli_query($db, $sql)){
            if(mysqli_num_rows($result) > 0){
            ?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Tender ID</th>
                  <th>Tender reference number</th>
                  <th>Tender type</th>
                  <th>No of covers</th>
                  <th>Should allow re-bid submission</th>
                  <th>View all details</th>
                  <th>Delete</th>
                </tr>
                </thead>

                <tbody>
                <?php

                while ($row = mysqli_fetch_array($result)) {

                ?>
                    <tr>
                      <td><?php echo $row['tender_id'];?></td>
                      <td><?php echo $row['tender_ref_number'];?></td>
                      <td><?php echo $row['tender_type'];?></td>
                      <td><?php echo $row['no_covers'];?></td>
                      <td><?php echo $row['re_bid_submission'];?></td>
                      <?php echo '<td> <a href="adminPublishedView.php?data='.$row['tender_ref_number'].'">Clickhere</a></td>';?>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><a href="adminTenderDelete.php?id=<?=$row['0']?>" onclick="return confirm('Sure To Remove This Record ?');"><button type="button" class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></a></p></td>
                    </tr>
                     <!--</a>-->

                
                <?php
                }

                ?>
                </tbody>
                
              </table>
              <?php  
              // Close result set
              //mysqli_free_result($result);
            } else{
                echo "No records matching your query were found.";
            }
            } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
            }


            // Close connection
            //mysqli_close($db);
            ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">

    </div>
    <strong>Copyright  UCSC </strong> All rights
    reserved.
  </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script src="notification.js"></script>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<script type="text/javascript">
function delete_id(id)
{
     if(confirm('Sure To Remove This Record ?'))
     {
        window.location.href='adminTenderDelete.php?id='+id;
     }
}
</script>
</body>
</html>
