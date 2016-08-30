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
    <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- css file for sweetalert -->
  <link rel="stylesheet" href="sweetalert/dist/sweetalert.css" />
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <link href="notification.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="jquery.datetimepicker.css"/>

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
  

  if(isset($_POST["submit"]))
  {
    
    $tender_ID = $_POST["tender_id"];
    $committee_id = $_POST["committee_id"];
    $member_1= $_POST["member_1"];
    $member_2 = $_POST["member_2"];
    $member_3 = $_POST["member_3"];
    $create_date = $_POST["create_date"];



    $tender_ID = mysqli_real_escape_string($db, $tender_ID);
    $committee_id = mysqli_real_escape_string($db, $committee_id);
    $member_1 = mysqli_real_escape_string($db, $member_1);
    $member_2 = mysqli_real_escape_string($db, $member_2);
    $member_3 = mysqli_real_escape_string($db, $member_3);
    $create_date = mysqli_real_escape_string($db, $create_date);
    
    
    
    $sql="SELECT committee_id FROM committee WHERE committee_id='$committee_id'";
    $result=mysqli_query($db,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if (mysqli_num_rows($result) == 1) {
      echo  '<script type="text/javascript">
            setTimeout(function(){
              sweetAlert("", "This Committee is already exist...", "error")
            },100);
           </script>';
    }else{
      $query = mysqli_query($db, "INSERT INTO committee(Tender_ID,Committee_ID,Member_1,Member_2,Member_3,Create_date) VALUES ('$tender_ID','$committee_id','$member_1','$member_2','$member_3','$create_date')");
      
      
    
    if($query)
      {
        
          echo  '<script type="text/javascript">
                setTimeout(function(){
                  swal({title: "", text: "Committee Created", type: "success"},
                    function(isConfirm){
                      if(isConfirm){
                        window.location.href = "adminHome.php";
                      }
                    }
                  )
                },100);
               </script>';
        
      }
    }
  }
  

?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Appoint Academic Staff 
            
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Appoint Academic Staff</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row" style="margin-top:60px">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-2">
                  <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Enter Committee Details</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="">
              <div class="box-body">
                <div class="form-group">
                  <label for="tender_id" class="col-sm-4 control-label">Tender ID <span style="color:red;">*</span></label>

                  <div class="col-sm-8">
                    <input type="text" name="tender_id" class="form-control" id="tender_id" placeholder="Tender ID" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="committee_id" class="col-sm-4 control-label">Committee ID <span style="color:red;">*</span></label>

                  <div class="col-sm-8">
                    <input type="committee_id" name="committee_id" class="form-control" id="committee_id" placeholder="Committee ID" required>
                  </div>
                </div>
                
                <div class="form-group">
                <label for="member_1" class="col-sm-4 control-label">Member 1 <span style="color:red;">*</span></label>
                  <div class="col-sm-8 ">
                    
                    <select class="form-control" name="member_1" required>
                      <option class="active" disabled selected value>-Select-</option>
                      <?php

                          $db = mysqli_connect('localhost', 'root', 'yehen','proc');


                          $sql = "SELECT * FROM user WHERE type='AcademicSelected' ";
                          $result = mysqli_query($db,$sql);

                          //echo "<select name='user_id'>";
                          while ($row = mysqli_fetch_array($result)) {
                              $name = $row['first_name']." ".$row['last_name'];
                              echo "<option value='" . $name . "'>" . $name . "</option>";
                          }
                          //echo "</select>";

                          ?>
                    </select>
                  </div>
              </div>

              <div class="form-group">
                <label for="member_2" class="col-sm-4 control-label">Member 2 <span style="color:red;">*</span></label>
                  <div class="col-sm-8 ">
                    
                    <select class="form-control" name="member_2" required>
                      <option class="active" disabled selected value>-Select-</option>
                      <?php

                          $db = mysqli_connect('localhost', 'root', 'yehen','proc');


                          $sql = "SELECT * FROM user WHERE type='AcademicSelected' ";
                          $result = mysqli_query($db,$sql);

                          //echo "<select name='user_id'>";
                          while ($row = mysqli_fetch_array($result)) {
                              $name = $row['first_name']." ".$row['last_name'];
                              echo "<option value='" . $name . "'>" . $name . "</option>";
                          }
                          //echo "</select>";

                          ?>
                    </select>
                  </div>
              </div>

              <div class="form-group">
                <label for="member_3" class="col-sm-4 control-label">Member 3 <span style="color:red;">*</span></label>
                  <div class="col-sm-8 ">
                    
                    <select class="form-control" name="member_3" required>
                      <option class="active" disabled selected value>-Select-</option>
                      <?php

                          $db = mysqli_connect('localhost', 'root', 'yehen','proc');


                          $sql = "SELECT * FROM user WHERE type='AcademicSelected' ";
                          $result = mysqli_query($db,$sql);

                          //echo "<select name='user_id'>";
                          while ($row = mysqli_fetch_array($result)) {
                              $name = $row['first_name']." ".$row['last_name'];
                              echo "<option value='" . $name . "'>" . $name . "</option>";
                          }
                          //echo "</select>";

                          ?>
                    </select>
                  </div>
              </div>

              <div class="form-group">
                  <label for="sub_start_date" class="col-sm-4 control-label"> Create Date <span style="color:red;">*</span> </label>

                  <div class="col-sm-4">
                  <input type="text" value="" id="datetimepicker2" name="create_date" style="width:300px;height:35px" placeholder="Enter date and type" required>
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
<script src="jquery.js"></script>
<script src="jquery.datetimepicker.full.js"></script>
<!-- page script -->
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
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

<script>/*
window.onerror = function(errorMsg) {
  $('#console').html($('#console').html()+'<br>'+errorMsg)
}*/

$.datetimepicker.setLocale('en');
$('#datetimepicker,#datetimepicker1,#datetimepicker2,#datetimepicker3,#datetimepicker4').datetimepicker({
dayOfWeekStart : 1,
lang:'en',
disabledDates:['1986/01/08','1986/01/09','1986/01/10'],
startDate:  'date("Y/m/d")'
});
//$('#datetimepicker').datetimepicker({value:'2016/06/26 05:03',step:10});

</script>
</body>
</html>

