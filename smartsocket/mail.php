<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\php\pear\PEAR\PHPMailer\src\Exception.php';
require 'C:\xampp\php\pear\PEAR\PHPMailer\src\PHPMailer.php';
require 'C:\xampp\php\pear\PEAR\PHPMailer\src\SMTP.php';
//Load composer's autoloader//
//require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com;smtp-relay.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'blogger21f@gmail.com';                 // SMTP username
    $mail->Password = 'BbSm%4.397';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('blogger21f@gmail.com', 'Bhargava');
    $mail->addAddress($usermail);     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Welcome to SmartSockets';
    $mail->Body    = 'Registration Successful! <br />You need to verify your email<br />
                        Click Here http://localhost/smartsocket/verify.php?email='.$usermail;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    //echo 'Message has been sent';

    $myfile=fopen("mailStatus.txt","w") or die('Unable to open file');
    fwrite($myfile,"Message has been sent");
    fclose($myfile);

} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    
}