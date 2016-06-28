<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tender List</title>
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
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">


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
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>E</b>Proc</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Easy</b>Proc</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
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
              <span class="hidden-xs">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2012</small>
                </p>
              </li>
                            
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
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
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Tenders</span>
            <span class="label label-primary pull-right">3</span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="Tenderlist.php"><i class="fa fa-circle-o"></i> Tender List</a></li>
            <li><a href="Publishtender.php"><i class="fa fa-circle-o"></i> Publish Tender </a></li>
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

 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tender List
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Tender List</a></li>
        
      </ol>
    </section>
    <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs" id="wheel-tab" data-tabs="tabs">
              <li class="active"><a href="#basic" data-toggle="tab">Basic Deatils</a></li>
              <li><a href="#cover" data-toggle="tab">Cover Details</a></li>
              <li><a href="#wid" data-toggle="tab">Work Item Details</a></li>
              <li><a href="#fd" data-toggle="tab">Fee Details</a></li>
              
              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            
            
            <div class="tab-content">
            <!-- ********************************************************************** -->
              <div class="tab-pane active" id="basic">
                  <form class="form-horizontal" method="post" action="tenderdata.php">
                    <div class="box-body">
                    <h3 class="box-title">Main Details</h3>

                      <div class="form-group">
                        <label for="tender_reference" class="col-sm-4 control-label">Tender Reference Number* </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="tender_reference" name="tender_reference" placeholder="Tender Reference Number">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="tender_type" class="col-sm-4 control-label">Tender type* </label>
                          <div class="col-sm-4 ">
                            
                            <select class="form-control" name="select_tender_type">
                              <option class="active">-Select-</option>
                              <option>Open</option>
                              <option>Limited</option>
                              <option>Auction</option>
                              <option>Single</option>
                            </select>
                          </div>
                      </div>

                      <div class="form-group">
                        <label for="tender_type" class="col-sm-4 control-label">No of Covers* </label>
                          <div class="col-sm-4 ">
                            
                            <select class="form-control" name="select_covers">
                              <option class="active">-Select-</option>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                            </select>
                          </div>
                      </div>

                      <div class="form-group">
                        <label for="submission" class="col-sm-4 control-label">Should allow Re-bid submission</label>
                        <div class="col-sm-1">
                          <div class="radio">
                            <label>
                              <input type="radio" name="resubyes" id="op1yes" value="yes" checked>
                              Yes 
                            </label>

                          </div>
                        </div>
                        <div class="col-sm-1">
                          <div class="radio">
                            <label>
                              <input type="radio" name="resubno" id="op1no" value="no" checked>
                              No
                            </label>
                          </div>
                        </div>
                      </div>

                      <!-- /////////////////////////////////////////////////// -->
                      <div class="form-group">
                        <label for="tender_reference" class="col-sm-4 control-label">Should allow Withdrawwl of bids</label>
                        <div class="col-sm-1">
                          <div class="radio">
                            <label>
                              <input type="radio" name="withdrawyes" id="op2yes" value="yes" checked>
                              Yes 
                            </label>

                          </div>
                        </div>
                        <div class="col-sm-1">
                          <div class="radio">
                            <label>
                              <input type="radio" name="withdrawno" id="op2no" value="no" checked>
                              No
                            </label>
                          </div>
                        </div>
                      </div>

                      <!-- /////////////////////////////////////////////////////////// -->
                      <div class="form-group">
                        <label for="tender_reference" class="col-sm-4 control-label">Should allow Offline Submission</label>
                        <div class="col-sm-1">
                          <div class="radio">
                            <label>
                              <input type="radio" name="offsubyes" id="op3yes" value="yes" checked>
                              Yes 
                            </label>

                          </div>
                        </div>
                        <div class="col-sm-1">
                          <div class="radio">
                            <label>
                              <input type="radio" name="offsubno" id="op3no" value="no" checked>
                              No
                            </label>
                          </div>
                        </div>
                      </div>

                      <!-- //////////////////////////////////////////////////////////// -->
                      <div class="form-group">
                        <label for="tender_reference" class="col-sm-4 control-label">Should allow General Technical Submission</label>
                        <div class="col-sm-1">
                          <div class="radio">
                            <label>
                              <input type="radio" name="techsubyes" id="op4yes" value="yes" checked>
                              Yes 
                            </label>

                          </div>
                        </div>
                        <div class="col-sm-1">
                          <div class="radio">
                            <label>
                              <input type="radio" name="techsubno" id="op4no" value="no" checked>
                              No
                            </label>
                          </div>
                        </div>
                      </div>
                      
                      <!-- //////////////////////////////////////////////////////////// -->  
                      </div>
                      <div class="form-group">
                        <label for="tender_type" class="col-sm-4 control-label">Payment Method* </label>
                        <div class="col-sm-1">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="paymentoff" id="paymentoff"> Offline
                            </label>
                          </div>
                        </div>
                        <div class="col-sm-1">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" name="paymenton" id="paymenton"> Online
                            </label>
                          </div>
                        </div>
                      </div>
                    </form>
              </div>

              <!-- ********************************************************************** -->
              <!-- /.tab-pane -->
              <div class="tab-pane" id="cover">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Add the Documents</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body no-padding">
                    <table class="table table-condensed">
                      <tr>
                        <th style="width: 10px">S.no</th>
                        
                        <th>Cover Name</th>
                        <th style="width: 40px">Cover Type</th>
                        <th>Add Documents</th>
                        <th>Add Contents</th>
                      </tr>
                      <tr>
                        <td>1.</td>
                        <td>2014_</td>
                        <td>Fee/PreQual/Technical</td>
                        <td>Document count</td>
                        <td><input type="file" id="fee/tec"></td>
                      </tr>
                      <tr>
                        <td>2.</td>
                        <td>2014_</td>
                        <td>Tender Document</td>
                        <td>Document count</td>
                        <td><input type="file" id="tenderdoc"></td>
                      </tr>
                      
                    </table>
                  </div>
                  <!-- /.box-body -->
                </div>
              </div>

              <!-- ********************************************************************** -->
              <!-- /.tab-pane -->
              <div class="tab-pane" id="wid">
                <div class="box box-info">
                  <div class="box-header with-border">
                    <h3 class="box-title">Item Details</h3>
                  </div>
                  
                  <!-- form start -->
                  <form class="form-horizontal" method="post" action="tenderdata.php">
                    
                    <div class="box-body">

                      <div class="form-group">
                        <label for="work_title" class="col-sm-4 control-label">Work/Item Title* </label>

                        <div class="col-sm-4">
                          <input type="text" class="form-control" id="work_title" name="work_title" placeholder="Title">
                        </div>
                      </div>

                      <div class="form-group">
                        <label  class="col-sm-4 control-label">Work/Item Description* </label>

                        <div class="col-sm-4">
                          <textarea class="form-control" rows="3" id="description" name="description" placeholder="Desccription" ></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="tender_reference" class="col-sm-4 control-label">Pre Qualification Details * </label>

                        <div class="col-sm-4">
                          <textarea class="form-control" rows="3" id="predescription" name="predescription" placeholder="Desccription" ></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="tender_type" class="col-sm-4 control-label">Product Catogary* </label>
                          <div class="col-sm-4 ">
                            
                            <select class="form-control" id="product_catogary" name="product_catogary">
                              <option class="active">-Select-</option>
                              <option>Open</option>
                              <option>Limited</option>
                              <option>Auction</option>
                              <option>Single</option>
                            </select>
                          </div>
                      </div>

                      <div class="form-group">
                        <label for="tender_reference" class="col-sm-4 control-label">Product SubCatogary* </label>

                        <div class="col-sm-4">
                          <textarea class="form-control" rows="3" id="sub_catogary" name="sub_catogary" placeholder="Desccription" ></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="tender_type" class="col-sm-4 control-label">Contract type</label>
                          <div class="col-sm-4 ">
                            
                            <select class="form-control" id="contract_type" name="contract_type">
                              <option class="active">-Select-</option>
                              <option>Open</option>
                              <option>Limited</option>
                              <option>Auction</option>
                              <option>Single</option>
                            </select>
                          </div>
                      </div>
                    </div>
                    
                  </form>

                </div>
              </div>

              <!-- ********************************************************************** -->
                    <div class="tab-pane" id="fd">
                      <div class="box box-info">
                        <div class="box-header with-border">
                          <h3 class="box-title">Fee Details/Special Dates</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="form-horizontal" id="fd" method="post" action="tenderdata.php">
                          
                          <div class="box-body">
                            <div class="form-group">
                              <label for="tender_reference" class="col-sm-3 control-label">Tender Fee(LK) </label>

                              <div class="col-sm-3">
                                <input type="text" class="form-control" id="tender_fee" name="tender_fee" placeholder="Tender Fee">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="tender_reference" class="col-sm-3 control-label">Any Other Tax Fee(LK) </label>

                              <div class="col-sm-3">
                                <input type="text" class="form-control" id="any_other_fee" name="any_other_fee" placeholder="Other Fee">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="publish_date" class="col-sm-3 control-label">Publishing Date* </label>

                              <div class="col-sm-3">
                                <input type="date" class="form-control" id="pub_date" name="pub_date" >
                              </div>

                              <label for="publish_date" class="col-sm-2 control-label">At </label>

                              <div class="col-sm-2">
                                <input type="time" class="form-control" id="pub_time" name="pub_time" >
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="downloade_date" class="col-sm-3 control-label">Document Download/Sales start Date* </label>

                              <div class="col-sm-3">
                                <input type="date" class="form-control" id="doc_date" name="doc_date" >
                              </div>

                              <label for="downloade_date" class="col-sm-2 control-label">At </label>

                              <div class="col-sm-2">
                                <input type="time" class="form-control" id="doc_time" name="doc_time" >
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="sub_start_date" class="col-sm-3 control-label">Bid Submission Start Date* </label>

                              <div class="col-sm-3">
                                <input type="date" class="form-control" id="bid_sart_date" name="bid_sart_date" >
                              </div>

                              <label for="sub_start_date" class="col-sm-2 control-label">At </label>

                              <div class="col-sm-2">
                                <input type="time" class="form-control" id="bid_start_time" name="bid_start_time" >
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="sub_close_date" class="col-sm-3 control-label">Bid Submission Closing Date* </label>

                              <div class="col-sm-3">
                                <input type="date" class="form-control" id="bid_close_date" name="bid_close_date" >
                              </div>

                              <label for="sub_close_date" class="col-sm-2 control-label">At </label>

                              <div class="col-sm-2">
                                <input type="time" class="form-control" id="bid_close_time" nbid_close_date >
                              </div>
                            </div>

                            <div class="form-group">
                              <label for="bid_open_date" class="col-sm-3 control-label">Bid Opening Date* </label>

                              <div class="col-sm-3">
                                <input type="date" class="form-control" id="bid_open_date" name="bid_open_date" >
                              </div>

                              <label for="bid_open_date" class="col-sm-2 control-label">At </label>

                              <div class="col-sm-2">
                                <input type="time" class="form-control" id="bid_close_opentime" name="bid_close_opentime" >
                              </div>
                            </div>
                            


                            
                          </div>
                          
                        </form>
                        
                      </div>
                    </div>
              <!-- /.tab-pane -->
              
              
            </div>
            <!-- /.tab-content -->
            
          </div>
          <!-- nav-tabs-custom -->
        </div>




    
        
    
  </div>

    
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.3
    </div>
    <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->



<!-- jQuery 2.2.0 -->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<script type="text/javascript">
  $ (function () {
    $('#datepicker').datepicker({
      autoclose: true
    });
  });
  
</script>


</body>
</html>
