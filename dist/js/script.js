function ReqMessage() {
	//alert("Isuru");
	$.ajax({    //create an ajax request to load_page.php
							
		type: "GET",
		url: "side1.php",             
		dataType: "html",   //expect html to be returned                
		success: function(response){                    
		$("#mail_notificatoin_bar").html(response); 
		//alert(response);
		}			
	});
	}
setTimeout(ReqMessage, 0);
setInterval(ReqMessage, 10000);