<?php
 
// Here is the price and currency code of our product according to our records
$price = '20.00';
$currency='USD';
$product_price         = $_POST['mc_gross'];
$product_currency      = $_POST['mc_currency'];
 
// Here is the product payment info received from PAYPAL after payment
 
//echo "<br />Product #:".$product_no            = $_POST['item_number']; // product ID
//echo "<br />Transaction ID:".$product_transaction   = $_POST['txn_id']; // PayPal transaction ID
//echo "<br />Price:".$product_price         = $_POST['mc_gross']; // PayPal received amount
//echo "<br />Currency:".$product_currency      = $_POST['mc_currency']; // PayPal currency type of received amount
//echo "<br />Payment Date:".$payment_date      = $_POST['payment_date'];
//echo "<br />Merchant ID:".$merchant      = $_POST['receiver_email'];
 
 
 
// Confirming the product price and currency code of payment made by buyer against
// product price and currency code according to our records
 
if($price == $product_price && $product_currency==$currency)
{
    ?>
	<html>
  

    <div style="top: 30%; left: 35%; position: absolute;">
        <div><h1>Payment successfully processed</h1><br>
	
	<center><a href="download.php?file=ud.pdf">Click here</a></center></div>
   

</html>
	<?php
}
else
{
 
    echo "<h1>Payment details does not match our records.
             </h1>";
}
 
 
?>