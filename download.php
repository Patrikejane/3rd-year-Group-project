<?php

    require 'PHPMailer/PHPMailerAutoload.php';
Class Cryptography
{
    function Encrypt($source, $destination)	{
        $key="passwordDR0wSS@P6660juht";
        $iv="password";

        if (extension_loaded('mcrypt') === true)
        {
            if (is_file($source) === true)
            {
                $source = file_get_contents($source);
                $encryptedSource=$this->TripleDesEncrypt($source,$key,$iv);
                if (file_put_contents($destination,$encryptedSource, LOCK_EX) !== false)
                {
                    return true;
                }
                return false;
            }
            return false;
        }

        return false;
    }

    function Decrypt($source, $destination) {
        $key="passwordDR0wSS@P6660juht";
        $iv="password";
        if (extension_loaded('mcrypt') === true)
        {
            if (is_file($source) === true)
            {
                $source = file_get_contents($source);
                $decryptedSource=self::TripleDesDecrypt($source,$key,$iv);
                if (file_put_contents($destination,$decryptedSource, LOCK_EX) !== false)
                {
                    return true;
                }
                echo "no read";
                return false;
            }
            echo "no file";
            return false;
        }
        echo "no mcrypt";

        return false;
    }

    /*
     Apply tripleDES algorthim for encryption, append "___EOT" to encrypted file ,
     so that we can remove it while decrpytion also padding 0's
     */
    function TripleDesEncrypt($buffer,$key,$iv) {

        $cipher = mcrypt_module_open(MCRYPT_3DES, '', 'cbc', '');
        $buffer.='___EOT';
        // get the amount of bytes to pad
        $extra = 8 - (strlen($buffer) % 8);
        // add the zero padding
        if($extra > 0) {
            for($i = 0; $i < $extra; $i++) {
                $buffer .= '_';
            }
        }
        mcrypt_generic_init($cipher, $key, $iv);
        $result = mcrypt_generic($cipher, $buffer);
        mcrypt_generic_deinit($cipher);
        return base64_encode($result);
    }

    /*
     Apply tripleDES algorthim for decryption, remove "___EOT" from encrypted file ,
     so that we can get the real data.
     */
    function TripleDesDecrypt($buffer,$key,$iv) {

        $buffer= base64_decode($buffer);
        $cipher = mcrypt_module_open(MCRYPT_3DES, '', 'cbc', '');
        mcrypt_generic_init($cipher, $key, $iv);
        $result = mdecrypt_generic($cipher,$buffer);
        $result=substr($result,0,strpos($result,'___EOT'));
        mcrypt_generic_deinit($cipher);
        return $result;
    }
}


$current_path= getcwd();
$obj = new Cryptography();
$obj->Encrypt($current_path."\\download\\Tenderdoc.pdf",$current_path."\\encryption\\test.pdf");
$obj->Decrypt($current_path."\\encryption\\test.pdf",$current_path."\\decryption\\test.pdf");



/*
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

*/

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
    $mail->addAddress('sskmal@gmail.com');   // Add a recipient
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    $mail->isHTML(true);  // Set email format to HTML

    $bodyContent = '<h1>Get tender document by <b>E-Proc</b></h1>';
    $bodyContent .= '<p>You paid the tender document. Download the zip file below and extract it.</p>';

    $mail->Subject = 'Tender Document by E-Proc';
    $mail->Body    = $bodyContent;
    $mail->addAttachment($current_path."\\encryption\\test.pdf");
    $mail->addAttachment($current_path."\\encryption\\Tenderdoc.pdf");

    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
?>



   