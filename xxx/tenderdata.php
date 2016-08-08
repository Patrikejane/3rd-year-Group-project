<?php 
	include("db.php");
	

	if(isset($_POST["submit"]))
	{
		echo "yehen";
		$tender_ref_number = $_POST["tender_reference"];
		$tender_type = $_POST["select_tender_type"];
		$no_covers = $_POST["select_covers"];
		$re_bid_submission = $_POST["resub"];
		$withdraw_bids = $_POST["withdraw"];
		$offline_submission = $_POST["offsub"];
		$general_technical_submission  =$_POST["techsub"];
		$payment_method = $_POST["payment"];
		$item_title = $_POST["work_title"];
		$item_description = $_POST["description"];
		$prequalification = $_POST["predescription"];
		$productcatogary = $_POST["product_catogary"];
		$productsubcatogary = $_POST["sub_catogary"];
		$contract_type = $_POST["contract_type"];
		$tender_fee = $_POST["tender_fee"];
		$other_tax_fee =$_POST["any_other_fee"];
		$publishing_date= $_POST["pub_time"];
		$sale_start_date= $_POST["doc_time"];
		$bid_start_date= $_POST["bid_start_time"];
		$bid_close_date= $_POST["bid_close_time"];
		$bid_opening_date= $_POST["bid_open_time"];
		$fee_doc = $_POST["fee_doc"];
		$tender_doc = $_POST["tender_doc"];


		$tender_ref_number = mysqli_real_escape_string($db, $tender_ref_number);
		$tender_type = mysqli_real_escape_string($db, $tender_type);
		$no_covers = mysqli_real_escape_string($db, $no_covers);
		$re_bid_submission = mysqli_real_escape_string($db, $re_bid_submission);
		$withdraw_bids = mysqli_real_escape_string($db, $withdraw_bids);
		$offline_submission = mysqli_real_escape_string($db, $offline_submission);
		$general_technical_submission  =mysqli_real_escape_string($db, $general_technical_submission);
		$payment_method = mysqli_real_escape_string($db, $payment_method);
		$item_title = mysqli_real_escape_string($db, $item_title);
		$item_description = mysqli_real_escape_string($db, $item_description);
		$prequalification = mysqli_real_escape_string($db, $prequalification);
		$product_catogary = mysqli_real_escape_string($db, $productcatogary);
		$product_sub_catogary = mysqli_real_escape_string($db, $productsubcatogary);
		$contract_type = mysqli_real_escape_string($db, $contract_type);
		$tender_fee = mysqli_real_escape_string($db, $tender_fee);
		$other_tax_fee =mysqli_real_escape_string($db, $other_tax_fee);
		$publishing_date= mysqli_real_escape_string($db, $publishing_date);
		$sale_start_date= mysqli_real_escape_string($db, $sale_start_date);
		$bid_start_date= mysqli_real_escape_string($db, $bid_start_date);
		$bid_close_date= mysqli_real_escape_string($db, $bid_close_date);
		$bid_opening_date= mysqli_real_escape_string($db, $bid_opening_date);
		$fee_doc = mysqli_real_escape_string($db, $fee_doc);
		$tender_doc = mysqli_real_escape_string($db, $tender_doc);

		
		
		$sql="SELECT tender_ref_number FROM tenderdocument WHERE tender_ref_number='$tender_ref_number'";
		$result=mysqli_query($db,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		if (mysqli_num_rows($result) == 1) {
			echo 	'<script type="text/javascript">
						setTimeout(function(){
							sweetAlert("", "This Tender Reference is already exist...", "error")
						},100);
					 </script>';
		}else{
			$query = mysqli_query($db, "INSERT INTO tenderdocument(tender_ref_number, tender_type, no_covers, re_bid_submission, withdraw_bids, offline_submission,general_technical_submission, paymont_method, item_title, item_description, prequalification, productcatogary, productsubcatogary, contract_type, tender_fee, other_tax_fee, publishing_date, sale_start_date, bid_satrt_date, bid_close_date, bid_opening_date, fee_doc, tender_doc) VALUES ('$tender_ref_number','$tender_type','$no_covers','$re_bid_submission','$withdraw_bids','$offline_submission','$general_technical_submission','$payment_method','$item_title','$item_description','$prequalification','$productcatogary','$productsubcatogary','$contract_type','$tender_fee','$other_tax_fee','$publishing_date','$sale_start_date','$bid_start_date','$bid_close_date','$bid_opening_date','$fee_doc','$tender_doc')");
			
			
		
		if($query)
			{
				
					echo 	'<script type="text/javascript">
								setTimeout(function(){
									swal({title: "", text: "Tender Document Published", type: "success"},
										function(isConfirm){
											if(isConfirm){
												window.location.href = "adminTenderlist.php";
											}
										}
									)
								},100);
						 	 </script>';
				
			}
		}
	}
	

?>

