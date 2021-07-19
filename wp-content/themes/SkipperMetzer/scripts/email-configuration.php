<?php
require_once "phpmailer/PHPMailerAutoload.php";
$mail = new PHPMailer;
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = "editpointindiacrm@gmail.com";  // Gmail username
$mail->Password = "Ed!tpo!ntInd!a2@21";      //     // SMTP password
$mail->SMTPSecure = 'openssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = '587';                                    // TCP port to connect to
$mail->Sender='editpointindiacrm@gmail.com';
$mail->setFrom('editpointindiacrm@gmail.com', 'Skipper Metzer');
$mail->isHTML(true);
?>