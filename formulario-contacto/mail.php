<?php 

require("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;


function sendMail($subject, $body, $email, $name, $html = false){

    //configuración inicial de nuestro servidor

    $phpmailer = new PHPMailer();
$phpmailer->isSMTP();
$phpmailer->Host = 'smtp.gmail.com';
$phpmailer->SMTPAuth = true;
$phpmailer->SMTPSecure = PHPMailer:: ENCRYPTION_SMTPS;
$phpmailer->Port = 465;
$phpmailer->Username = 'c8cifuentes@gmail.com';
$phpmailer->Password = 'ucevzzrwhofhldnm';

//añadiendo destinatarios

$phpmailer->setFrom('from@example.com', 'Mailer');
$phpmailer->addAddress($email, $name); 

//definiendo el contenido de mi email

$phpmailer->isHTML($html);                                  //Set email format to HTML
$phpmailer->Subject = $subject;
$phpmailer->Body    = $body;

//mandar el correo


$phpmailer->send();

}




?>