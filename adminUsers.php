<!DOCTYPE html>
<?php
    
    include('adminSide.php');

    $sql="SELECT user_id,type,first_name,last_name,email,address FROM user";
    $result = mysqli_query($db,$sql);

    $num_rows = mysqli_num_rows($result);

?>


<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-Proc UCSC | Admin Users</title>
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


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Registered Users
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Registered Users</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">


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
                  <th>User ID</th>
                  <th>Type</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>View all details</th>
                  <th>Delete</th>
                </tr>
                </thead>

                <tbody>
                <?php

                while ($row = mysqli_fetch_array($result)) {

                ?>
                    <tr>
                      <td><?php echo $row['user_id'];?></td>
                      <td><?php echo $row['type'];?></td>
                      <td><?php echo $row['first_name']." ".$row['last_name'];?></td>
                      <td><?php echo $row['email'];?></td>
                      <td><?php echo $row['address'];?></td>
                      <?php echo '<td> <a href="adminUsersView.php?data='.$row['user_id'].'">Clickhere</a></td>';?>
                      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><a href="adminUsersDelete.php?id=<?=$row['0']?>" onclick="return confirm('Sure To Remove This Record ?');"><button type="button" class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></a></p></td>
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

</body>
</html>
