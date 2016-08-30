<?php

    require 'PHPMailer/PHPMailerAutoload.php';


	if (isset($_GET['file']) && basename($_GET['file']) == $_GET['file']) {
		$filename = $_GET['file'];
	} else {
		$filename = NULL;
	}

	$path = 'C:/Users/rsenith/Downloads/'.$filename;

    # create new zip opbject
    $zip = new ZipArchive();

    # create a temp file & open it
    //$tmp_file = tempnam('.','');
    $zip->open('test.zip', ZipArchive::CREATE);

    $zip->addFile($path, 'udud.pdf');

    # close zip
    $zip->close();

    $mail = new PHPMailer;

    $mail->isSMTP();                            // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                     // Enable SMTP authentication
    $mail->Username = 'eprocucsc@gmail.com';          // SMTP username
    $mail->Password = '0602416161'; // SMTP password
    $mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                          // TCP port to connect to

    $mail->setFrom('eprocucsc@gmail.com', 'E-Proc');
    $mail->addReplyTo('eprocucsc@gmail.com', 'E-Proc');
    $mail->addAddress('rsenith@gmail.com');   // Add a recipient
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    $mail->isHTML(true);  // Set email format to HTML

    $bodyContent = '<h1>Get tender document by <b>E-Proc</b></h1>';
    $bodyContent .= '<p>You paid the tender document. Download the zip file below and extract it.</p>';

    $mail->Subject = 'Tender Document by E-Proc';
    $mail->Body    = $bodyContent;
    $mail->addAttachment('C:/wamp/www/gitProc/3rd-year-Group-Project/test.zip');

    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
?>



   