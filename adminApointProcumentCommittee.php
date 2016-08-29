<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-Proc UCSC | Admin Academic View</title>
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
<?php

    
    include ('adminSide.php');
    

    if(isset($_GET["data"])){

        $data = $_GET["data"];


    //print($data);
    $sql="SELECT * FROM user WHERE user_id='$data'";
    //print($sql);
    $result = mysqli_query($db,$sql);
    //print_r($result);
    $row = mysqli_fetch_array($result);
    //print_r($row);
    }



    
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Appoint Academic Staff to Procurement Committee
            
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Appoint Academic Staff</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row" style="margin-top:60px">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-4">
                  <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Enter Company Details</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="">
              <div class="box-body">
                <div class="form-group">
                  <label for="company_name" class="col-sm-4 control-label">Company Name<span style="color:red;">*</span></label>

                  <div class="col-sm-8">
                    <input type="text" name="company_name" class="form-control" id="company_name" placeholder="Company Name" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="col-sm-4 control-label">Email<span style="color:red;">*</span></label>

                  <div class="col-sm-8">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="tin_number" class="col-sm-4 control-label">TIN Number<span style="color:red;">*</span></label>

                  <div class="col-sm-8">
                    <input type="text" name="tin_number" class="form-control" id="tin_number" placeholder="TIN Number" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="diversity_categories" class="col-sm-4 control-label">Diversity Categories<span style="color:red;">*</span></label>

                  <div class="col-sm-8">
                    <input type="text" name="diversity_categories" class="form-control" id="diversity_categories" placeholder="Diversity Categories" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="city" class="col-sm-4 control-label">City<span style="color:red;">*</span></label>

                  <div class="col-sm-8">
                    <input type="text" name="city" class="form-control" id="city" placeholder="City" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="web_url" class="col-sm-4 control-label">Web URL<span style="color:red;">*</span></label>

                  <div class="col-sm-8">
                    <input type="url" name="web_url" class="form-control" id="web_url" placeholder="Web URL" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="phone_number" class="col-sm-4 control-label">Phone Number</label>

                  <div class="col-sm-8">
                    <input type="tel" name="phone_number" class="form-control" id="phone_number" placeholder="Phone Number">
                  </div>
                </div>
                <div class="form-group">
                  <label for="fax_number" class="col-sm-4 control-label">Fax Number</label>

                  <div class="col-sm-8">
                    <input type="tel" name="fax_number" class="form-control" id="fax_number" placeholder="Fax Number">
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="row">
                
                <div class="col-md-12"> 
                <button type="submit" name = "submit" class="btn btn-info pull-right">Submit</button>
                </div>
                </div>
              </div>
              <!-- /.box-footer -->
            </form>
        </div>
        </div>
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

