<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require '../vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
$login = filter_var(trim($_POST['login']));
try {
    //Server settings
                     // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'ssl://smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'faketaxi1448@gmail.com';                     // SMTP username
    $mail->Password   = 'saske123';                               // SMTP password
    $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('faketaxi1448@gmail.com', 'oops');
    $mail->addAddress('roarlove1337@gmail.com', 'Ya');     // Add a recipient
    $mail->addAddress('faketaxi1448@gmail.com');               // Name is optional



    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Ya Punk';
    $mail->Body    = '0';
    // $mail->AltBody = 'что могу тебе я написать... ты в жопе';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}