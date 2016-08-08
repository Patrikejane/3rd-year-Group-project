<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-Proc UCSC | Admin Users View</title>
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
    

    if(isset($_GET["data"]))
    {
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
            Registered User
            
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Registered User</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="panel panel-primary">
                        <div class="panel-heading">User Detail</div>
                        <div class="panel-body">

                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="usr">User ID</label>
                                    <input type="text" class="form-control" id="usr" readonly placeholder="<?php echo $row['user_id'];?>">
                                </div>
                                <div class="col-lg-6">
                                    <label for="pwd">Type</label>
                                    <input type="password" class="form-control" id="pwd" readonly placeholder="<?php echo $row['type'];?>">
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="usr">Title</label>
                                    <input type="text" class="form-control" id="usr" readonly placeholder="<?php echo $row['title'];?>">
                                </div>
                                <div class="col-lg-6">
                                    
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="usr">First Name</label>
                                    <input type="text" class="form-control" id="usr" readonly placeholder="<?php echo $row['first_name'];?>">
                                </div>
                                <div class="col-lg-6">
                                    <label for="pwd">Last Name</label>
                                    <input type="password" class="form-control" id="pwd" readonly placeholder="<?php echo $row['last_name'];?>">
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="usr">Date of Birth</label>
                                    <input type="text" class="form-control" id="usr" readonly placeholder="<?php echo $row['dob'];?>">
                                </div>
                                <div class="col-lg-6">
                                    
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="usr">Email</label>
                                    <input type="text" class="form-control" id="usr" readonly placeholder="<?php echo $row['email'];?>">
                                </div>
                                <div class="col-lg-6">
                                    <label for="pwd">Address</label>
                                    <input type="password" class="form-control" id="pwd" readonly placeholder="<?php echo $row['address'];?>">
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="usr">District</label>
                                    <input type="text" class="form-control" id="usr" readonly placeholder="<?php echo $row['district'];?>">
                                </div>
                                <div class="col-lg-6">
                                    <label for="pwd">City</label>
                                    <input type="password" class="form-control" id="pwd" readonly placeholder="<?php echo $row['city'];?>">
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

