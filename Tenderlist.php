<?php
include("db.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  
  <link rel="stylesheet" type="text/css" href="jquery.datetimepicker.css"/>
  <style type="text/css">

  .custom-date-style {
    background-color: red !important;
  }

  .input{ 
  }
  .input-wide{
    width: 500px;
  }

  </style>
  
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
  <aside class="main-sidebar" style="background-color:#020816;">
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
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Tenders</span>
            <span class="label label-primary pull-right">2</span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="Tenderlist.php"><i class="fa fa-circle-o"></i>Publish Tender</a></li>
            
            <li><a href="Published.php"><i class="fa fa-circle-o"></i>Published Tenders</a></li>
            
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
        Publish Tender
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Publish Tender</a></li>
        
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-12 ">
          
          <div class="box box-info">
          <div class="box-header with-border">
              <h2 class="box-title">Main Details</h2>
            </div>
          <form class="form-horizontal" method="post" name="main" id="main" action="tenderdata.php">
            
              <div class="form-group">
                <label for="tender_reference" class="col-sm-4 control-label">Tender reference number* </label>

                <div class="col-sm-4">
                  <input type="text" class="form-control" id="tender_reference" name="tender_reference" placeholder="Tender reference number">
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
                <label for="submission" class="col-sm-4 control-label">Should allow re-bid submission</label>
                <div class="col-sm-1">
                  <div class="radio" >
                    <label>
                      <input type="radio" name="resub" id="op1yes" value="yes" checked>
                      Yes 
                    </label>

                  </div>
                </div>
                <div class="col-sm-1">
                  <div class="radio">
                    <label>
                      <input type="radio" name="resub" id="op1no" value="no" checked>
                      No
                    </label>
                  </div>
                </div>
              </div>

              <!-- /////////////////////////////////////////////////// -->
              <div class="form-group">
                <label for="tender_reference" class="col-sm-4 control-label">Should allow withdrawal of bids</label>
                <div class="col-sm-1">
                  <div class="radio">
                    <label>
                      <input type="radio" name="withdraw" id="op2yes" value="yes" checked>
                      Yes 
                    </label>

                  </div>
                </div>
                <div class="col-sm-1">
                  <div class="radio">
                    <label>
                      <input type="radio" name="withdraw" id="op2no" value="no" checked>
                      No
                    </label>
                  </div>
                </div>
              </div>

              <!-- /////////////////////////////////////////////////////////// -->
              <div class="form-group">
                <label for="tender_reference" class="col-sm-4 control-label">Should allow offline submission</label>
                <div class="col-sm-1">
                  <div class="radio">
                    <label>
                      <input type="radio" name="offsub" id="op3yes" value="yes" checked>
                      Yes 
                    </label>

                  </div>
                </div>
                <div class="col-sm-1">
                  <div class="radio">
                    <label>
                      <input type="radio" name="offsub" id="op3no" value="no" checked>
                      No
                    </label>
                  </div>
                </div>
              </div>

              <!-- //////////////////////////////////////////////////////////// -->
              <div class="form-group">
                <label for="tender_reference" class="col-sm-4 control-label">Should allow general technical submission</label>
                <div class="col-sm-1">
                  <div class="radio">
                    <label>
                      <input type="radio" name="techsub" id="op4yes" value="yes" checked>
                      Yes 
                    </label>

                  </div>
                </div>
                <div class="col-sm-1">
                  <div class="radio">
                    <label>
                      <input type="radio" name="techsub" id="op4no" value="no" checked>
                      No
                    </label>
                  </div>
                </div>
              </div>
              
              <!-- //////////////////////////////////////////////////////////// -->  
              
              <div class="form-group">
                <label for="tender_type" class="col-sm-4 control-label">Payment Method* </label>
                <div class="col-sm-1">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="payment" id="paymentoff"> Offline
                    </label>
                  </div>
                </div>
                <div class="col-sm-1">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="payment" id="paymenton"> Online
                    </label>
                  </div>
                </div>
              </div>

             

              <div class="form-group">
                <label for="work_title" class="col-sm-4 control-label">Work/Item Title* </label>

                <div class="col-sm-4">
                  <input type="text" class="form-control" id="work_title" name="work_title" placeholder="Title">
                </div>
              </div>

              <div class="form-group">
                <label  class="col-sm-4 control-label">Work/Item description* </label>

                <div class="col-sm-4">
                  <textarea class="form-control" rows="3" id="description" name="description" placeholder="Description" ></textarea>
                </div>
              </div>

              <div class="form-group">
                <label for="tender_reference" class="col-sm-4 control-label">Pre qualification details * </label>

                <div class="col-sm-4">
                  <textarea class="form-control" rows="3" id="predescription" name="predescription" placeholder="Description" ></textarea>
                </div>
              </div>

              <div class="form-group">
                <label for="tender_type" class="col-sm-4 control-label">Product category* </label>
                  <div class="col-sm-4 ">
                    
                    <select class="form-control" id="product_catogary" name="product_catogary">
                      <option class="active" disabled>-Select-</option>
                      <option>Open</option>
                      <option>Limited</option>
                      <option>Auction</option>
                      <option>Single</option>
                    </select>
                  </div>
              </div>

              <div class="form-group">
                <label for="tender_reference" class="col-sm-4 control-label">Product subcategory* </label>

                <div class="col-sm-4">
                  <textarea class="form-control" rows="3" id="sub_catogary" name="sub_catogary" placeholder="Description" ></textarea>
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


                <div class="form-group">
                  <label for="tender_reference" class="col-sm-4 control-label">Tender fee(LK) </label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="tender_fee" name="tender_fee" placeholder="Tender Fee">
                  </div>
                </div>
                <div class="form-group">
                  <label for="tender_reference" class="col-sm-4 control-label">Any other tax fee(LK) </label>

                  <div class="col-sm-4">
                    <input type="text" class="form-control" id="any_other_fee" name="any_other_fee" placeholder="Other Fee">
                  </div>
                </div>
                <div class="form-group">
                  <label for="publish_date" class="col-sm-4 control-label">Publishing date* </label>
                  
                  <div class="col-sm-4">
                  <input type="text" value="" id="datetimepicker" name="pub_time" style="width:300px;height:35px" placeholder="Enter date and type">
                  </div>

                  
                </div>

                <div class="form-group">
                  <label for="downloade_date" class="col-sm-4 control-label">Document download/Sales start date* </label>

                  <div class="col-sm-4">
                  <input type="text" value="" id="datetimepicker1" name="doc_time" style="width:300px;height:35px" placeholder="Enter date and type">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sub_start_date" class="col-sm-4 control-label">Bid submission starting date* </label>

                  <div class="col-sm-4">
                  <input type="text" value="" id="datetimepicker2" name="bid_start_time" style="width:300px;height:35px" placeholder="Enter date and type">
                  </div>
                </div>

                <div class="form-group">
                  <label for="sub_close_date" class="col-sm-4 control-label">Bid submission closing date* </label>

                  <div class="col-sm-4">
                  <input type="text" value="" id="datetimepicker3" name="bid_close_time" style="width:300px;height:35px" placeholder="Enter date and type">
                  </div>
                </div>

                <div class="form-group">
                  <label for="bid_open_date" class="col-sm-4 control-label">Bid opening date* </label>

                  <div class="col-sm-4">
                  <input type="text" value="" id="datetimepicker4" name="bid_open_time" style="width:300px;height:35px" placeholder="Enter date and type">
                  </div>
                </div>
                <div class="col-md-offset-1">
                <table class="table table-condensed">
                  <tr>
                    <th style="width: 10px">S.no</th>
                    
                    <th>Cover Name</th>
                    <th style="width: 40px">Cover type</th>
                    <th>Add Documents</th>
                    <th>Add Contents</th>
                  </tr>
                  <tr>
                    <td>1.</td>
                    <td>2014_</td>
                    <td>Fee/PreQual/Technical</td>
                    <td>Document count</td>
                    <td><input type="file" id="fee/tec" name="fee_doc"></td>
                  </tr>
                  <tr>
                    <td>2.</td>
                    <td>2014_</td>
                    <td>Tender Document</td>
                    <td>Document count</td>
                    <td><input type="file" id="tenderdoc" name="tender_doc"></td>
                  </tr>
                  
                </table>
                </div>
                <div class="row">
                  <div class="col-md-offset-7 col-md-2">
                    <input type="submit" class="btn btn-block btn-primary" value="Submit" name="submit" onclick="submitForms()" style="align:right;" />
                  </div>
                </div>
                


                
              
              
          </form>
          </div>
        </div>
        </div>
    </section>

    
        
    
  </div>

    
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">

    <strong>Copyright UCSC </strong> All rights
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
<script src="jquery.js"></script>
<script src="jquery.datetimepicker.full.js"></script>
<script>/*
window.onerror = function(errorMsg) {
  $('#console').html($('#console').html()+'<br>'+errorMsg)
}*/

$.datetimepicker.setLocale('en');
$('#datetimepicker,#datetimepicker1,#datetimepicker2,#datetimepicker3,#datetimepicker4').datetimepicker({
dayOfWeekStart : 1,
lang:'en',
disabledDates:['1986/01/08','1986/01/09','1986/01/10'],
startDate:  '1986/01/05'
});
//$('#datetimepicker').datetimepicker({value:'2016/06/26 05:03',step:10});

</script>
</body>
</html>

