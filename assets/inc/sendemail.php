<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';




    // $name = htmlentities($_POST['name']);
    // $email = htmlentities($_POST['email']);
    // $subject = htmlentities($_POST['subject']);
    // $message = htmlentities($_POST['message']);

    // $mail = new PHPMailer(true);
    // $mail->isSMTP();
    // $mail->Host = gethostbyname('smtp.pepipost.com');
    // // $mail->Host = 'smtp.gmail.com';
    // $mail->SMTPAuth = true;
    // $mail->Username = 'kjewellery2023@gmail.com';
    // $mail->Password = 'scjvjemhhsjhzrtr';
    // $mail->Port = 587;
    // $mail->SMTPSecure = 'ssl';
    // $mail->isHTML(true);
    // $mail->setFrom($email, $name);
    // $mail->addAddress('kjewellery2023@gmail.com');
    // $mail->Subject = ("$email ($subject)");
    // $mail->Body = $message;
    // $mail->send();
    
$name = htmlentities($_POST['name']);
$email = htmlentities($_POST['email']);
$subject = htmlentities($_POST['subject']);
$message = htmlentities($_POST['message']);
$mail = new PHPMailer();
$mail->IsSMTP();  // telling the class to use SMTP
$mail->SMTPDebug = 2;
$mail->Mailer = "smtp";
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "noreply.nandalalainfotech@gmail.com"; // SMTP username
$mail->Password = "yuntjikzkpxmhdoj"; // SMTP password
// $Mail->Priority = 1;
$mail->AddAddress("ssbuilderstrichy01@gmail.com","SSBuilders");
$mail->AddCC("diva@nandalalainfotech.com", "SSBuilders");
$mail->SetFrom($email);
// $mail->AddReplyTo($visitor_email,$name);
    $name = isset($_POST['name']) ? preg_replace("/[^\.\-\' a-zA-Z0-9]/", "", $_POST['name']) : "";
	$senderEmail = isset($_POST['email']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email']) : "";
	$phone = isset($_POST['phone']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['phone']) : "";
	$services = isset($_POST['services']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['services']) : "";
	$subject = isset($_POST['subject']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['subject']) : "";
	$address = isset($_POST['address']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['address']) : "";
	$website = isset($_POST['website']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['website']) : "";
	$message = isset($_POST['message']) ? preg_replace("/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message']) : "";
    $mail->Subject = 'Enquiry received from ssbuilders.com website' ;
    $mail->Body    = 'Name: ' . $name . "\n";
    $mail->Body .= 'Email: ' . $senderEmail . "\n";
$mail->Body .= 'Message: ' . "\n" . $message;
$mail->WordWrap = 50;
if(!$mail->Send()) {
echo 'Message was not sent.';
echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
echo 'Message has been sent.';
header("Location: ./response.html");
}

  

// require 'class.smtp.php';
// $mail = new PHPMailer();
// $mail->IsSMTP();  // telling the class to use SMTP
// $mail->SMTPDebug = 2;
// $mail->Mailer = "smtp";
// $mail->Host = "smtp.gmail.com";
// $mail->Port = 587;
// $mail->SMTPAuth = true; // turn on SMTP authentication
// $mail->Username = "dummymail071@gmail.com"; // SMTP username
// $mail->Password = "scjvjemhhsjhzrtr"; // SMTP password
// // $Mail->Priority = 1;
// $mail->AddAddress("myemail@gmail.com","Name");
// $mail->SetFrom("dummymail071@gmail.com");
// // $mail->AddReplyTo($visitor_email,$name);
// $mail->Subject  = "This is a Test Message";
// $mail->Body     = "sdfs";
// $mail->WordWrap = 50;
// if(!$mail->Send()) {
// echo 'Message was not sent.';
// echo 'Mailer error: ' . $mail->ErrorInfo;
// } else {
// echo 'Message has been sent.';
// }
?>
