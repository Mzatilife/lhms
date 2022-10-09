<?php
$mailto=$_POST['mail_to'];
$mailsub=$_POST['mail_sub'];
$mailMsg=$_POST['mail_msg'];


/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
require_once 'PHPMailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages

//Set the hostname of the mail server
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'ssl';

$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = '465';




//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "nelsonmhangopc@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "0991773446";

//Set who the message is to be sent from
$mail->setFrom('nelsonmhangopc@gmail.com');


//Set who the message is to be sent to


//Set the subject line
$mail->Subject = $mailSub;

//Replace the plain text body with one created manually
$mail->Body =$mailMsg ;

$mail->addAddress($mailto);
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
  
}
   ?>