<?PHP
require_once("config.php");
?>
 <html>
 <head>
 </head>
 
 <body>
 <style>
.title{
    font-weight:bold;
}
.buy
{
    border: 1px solid #cecece;
    padding: 10px;
    margin: 5px;
    padding: 5px;
    text-align: center;
    width: 300px;
 
   
}
</style>
<div style="text-align:center">
    
   
   
 
<h4></h4>
<center>
<div class="buy">            
    <div class="image">
    
        <img src="hidden-files.jpg" width="300px" height="200px"/>
		
    </div>
    <div class="title">
        Password
        <br /><br />
    </div>
    <div class="price">
        Price:$20
        <br />
        <br />
    </div>
	</center>

    <div class="btn">
    
     <form action="<?php echo $payment_url; ?>" method="post" name="frmPayPal1">
    <input type="hidden" name="cancel_return" value="http://localhost/gitProc/3rd-year-Group-project/cancelled.php">
    <input type="hidden" name="return" value="http://localhost/gitProc/3rd-year-Group-project/processed.php">
    <input type="hidden" name="business" value="<?php echo $merchant_email; ?>">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="item_name" value="password">
    <input type="hidden" name="item_number" value="1">
    <input type="hidden" name="credits" value="510">
    <input type='hidden' name='rm' value='2'>
    <input type="hidden" name="userid" value="1">
    <input type="hidden" name="amount" value="20">
    
    <input type="hidden" name="no_shipping" value="1">
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="handling" value="0">
    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form> 
    </div>
	
	</body>

 </html>

 

 