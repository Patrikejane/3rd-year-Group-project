<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-Proc UCSC | Published Tender Display</title>
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

    include("side.php");

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

