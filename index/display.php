<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-Proc UCSC | Published Tender Dispaly</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php

    include("..\db.php");

    if(isset($_GET["data"]))
    {
        $data = $_GET["data"];


    //print($data);
    $sql="SELECT * FROM tenderdocument WHERE tender_ref_number='$data'";
    //print($sql);
    $result = mysqli_query($db,$sql);
    //print_r($result);
    $row = mysqli_fetch_array($result);
    //print_r($row);
    }
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
          <a href="..\home.php">
            <i class="fa fa-home"></i> <span>Home</span>
          </a>
        </li>
        <li>
          <a href="..\Published.php">
            <i class="fa fa-files-o"></i> <span>Tenders</span>
          </a>
        </li>
        <li>
          <a href="..\Companies.php">
            <i class="fa fa-building"></i> <span>Companies</span>
          </a>
        </li>
        <li>
          <a href="..\Bids.php">
            <i class="fa fa-legal"></i> <span>Bids</span>
          </a>
        </li>
        <li>
          <a href="..\Reports.php">
            <i class="fa fa-file-text"></i> <span>Reports</span>
          </a>
        </li>
        <li>
          <a href="..\Help.php">
            <i class="fa fa-question-circle"></i> <span>Help</span>
          </a>
        </li>
        <li>
          <a href="..\About.php">
            <i class="fa fa-info-circle"></i> <span>About us</span>
          </a>
        </li>
        <li>
          <a href="..\Contact.php">
            <i class="fa fa-phone-square"></i> <span>Contact us</span>
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
            Published Tender
            
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Published Tender</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="panel panel-primary">
                        <div> <!--class="panel-heading"--></div>
                        <div class="panel-body">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="usr">Tender ID :</label>
                                    <input type="text" class="form-control" id="usr" readonly placeholder="<?php echo $row['tender_ref_number'];?>">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Tender Type</label>
                                    <input type="password" class="form-control" id="pwd" readonly placeholder="<?php echo $row['tender_type'];?>">
                                </div>

                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="usr">No of covers</label>
                                    <input type="text" class="form-control" id="usr" readonly placeholder="<?php echo $row['no_covers'];?>">
                                </div>

                            </div>



                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <div class="box">
                    
                    
                    <div class="box-body">
                        <div class="panel panel-primary">
                            <div class="panel-heading"> Submission Detail</div>
                            <div class="panel-body">
                                <div class="col-lg-6">
                                    <form>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-7 form-control-label">Should allow Re-bid submission</label>
                                            <div class="col-sm-5">
                                                <input type="email" class="form-control" id="inputEmail3" readonly placeholder="<?php echo $row['re_bid_submission'];?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-7 form-control-label">Should allow Withdrawal of bids</label>
                                            <div class="col-sm-5">
                                                <input type="email" class="form-control" id="inputEmail3" readonly placeholder="<?php echo $row['withdraw_bids'];?>">
                                            </div>
                                        </div>


                                </div>
                                <div class="col-lg-6">
                                    <form>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-7 form-control-label">Should allow Offline Submission</label>
                                            <div class="col-sm-5">
                                                <input type="email" class="form-control" id="inputEmail3" readonly placeholder="<?php echo $row['offline_submission'];?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-7 form-control-label">Should allow General Technical Submission</label>
                                            <div class="col-sm-5">
                                                <input type="email" class="form-control" id="inputEmail3" readonly placeholder="<?php echo $row['general_technical_submission'];?>">
                                            </div>
                                        </div>


                                </div>





                            </div>
                        </div>
                        <div class="panel panel-primary">
                                <div class="panel-heading"> Tender Discription</div>
                                <div class="panel-body">
                                    <div class="col-lg-6">
                                        <form>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-7 form-control-label">Item Title</label>
                                                <div class="col-sm-5">
                                                    <input type="email" class="form-control" id="inputEmail3" readonly placeholder="<?php echo $row['item_title'];?>">

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-7 form-control-label">Item Description</label>
                                                <div class="col-sm-5">
                                                    <textarea class="form-control" rows="3" id="description" name="description" readonly placeholder="<?php echo $row['item_description'];?>" ></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-7 form-control-label">Product SubCatogary </label>
                                                <div class="col-sm-5">
                                                    <textarea class="form-control" rows="3" id="description" name="description" readonly placeholder="<?php echo $row['productsubcatogary'];?>" ></textarea>
                                                </div>
                                            </div>


                                    </div>
                                    <div class="col-lg-6">
                                        <form>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-7 form-control-label">Pre Qualification Details </label>
                                                <div class="col-sm-5">
                                                    <textarea class="form-control" rows="3" id="description" name="description" readonly placeholder="<?php echo $row['prequalification'];?>" ></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputEmail3" class="col-sm-7 form-control-label">Product Category</label>
                                                <div class="col-sm-5">
                                                    <input type="email" class="form-control" id="inputEmail3" readonly placeholder="<?php echo $row['productcatogary'];?>">
                                                </div>
                                            </div>


                                    </div>





                                </div>

                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading"> Payment Detail</div>
                            <div class="panel-body">
                                <div class="col-lg-6">
                                    <form>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-7 form-control-label">Contract type</label>
                                            <div class="col-sm-5">
                                                <input type="email" class="form-control" id="inputEmail3" readonly placeholder="<?php echo $row['contract_type'];?>">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-7 form-control-label">Payment Method</label>
                                            <div class="col-sm-5">
                                                <input type="email" class="form-control" id="inputEmail3" readonly placeholder="<?php echo $row['paymont_method'];?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-7 form-control-label">Tender Fee</label>
                                            <div class="col-sm-5">
                                                <input type="email" class="form-control" id="inputEmail3" readonly placeholder="<?php echo $row['tender_fee'];?>">
                                            </div>
                                        </div>


                                </div>
                                <div class="col-lg-6">
                                    <form>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-7 form-control-label">Any Other Tax Fee(LK)</label>
                                            <div class="col-sm-5">
                                                <input type="email" class="form-control" id="inputEmail3" readonly placeholder="<?php echo $row['other_tax_fee'];?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-7 form-control-label">Product Category</label>
                                            <div class="col-sm-5">
                                                <input type="email" class="form-control" id="inputEmail3" readonly placeholder="<?php echo $row['productcatogary'];?>">
                                            </div>
                                        </div>


                                </div>





                            </div>

                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading"> Dates</div>
                            <div class="panel-body">
                                <div class="col-lg-6">
                                    <form>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-7 form-control-label">Publishing Date</label>
                                            <div class="col-sm-5">
                                                <input type="email" class="form-control" id="inputEmail3" readonly placeholder="<?php echo $row['publishing_date'];?>">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-7 form-control-label">Document Download/Sales start Date</label>
                                            <div class="col-sm-5">
                                                <input type="email" class="form-control" id="inputEmail3" readonly placeholder="<?php echo $row['sale_start_date'];?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-7 form-control-label">Bid Submission Start Date</label>
                                            <div class="col-sm-5">
                                                <input type="email" class="form-control" id="inputEmail3" readonly placeholder="<?php echo $row['bid_satrt_date'];?>">
                                            </div>
                                        </div>


                                </div>
                                <div class="col-lg-6">
                                    <form>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-7 form-control-label">Bid Submission Closing Date</label>
                                            <div class="col-sm-5">
                                                <input type="email" class="form-control" id="inputEmail3" readonly placeholder="<?php echo $row['bid_close_date'];?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-7 form-control-label">Bid Opening Dates</label>
                                            <div class="col-sm-5">
                                                <input type="email" class="form-control" id="inputEmail3" readonly placeholder="<?php echo $row['bid_opening_date'];?>">
                                            </div>
                                        </div>


                                </div>





                            </div>

                        </div>
                        <div class="panel panel-primary">
                            <div class="panel-heading"> Download</div>
                            <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="button" class="btn btn-secondary btn-lg btn-block">Download Tender Document</button>
                                </div>
                            </div>
                            </div>
                        </div>

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


<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.0 -->
<script src="../plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
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
</body>
</html>

