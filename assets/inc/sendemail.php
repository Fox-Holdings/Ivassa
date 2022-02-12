<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$name= isset($_POST['name']) ? preg_replace("/[^\.\-\' a-zA-Z0-9]/", "", $_POST['name']) : "";
$email= isset($_POST['email']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email']) : "";
$phone= isset($_POST['phone']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['phone']) : "";
$services= isset($_POST['services']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['services']) : "";
$subject= isset($_POST['subject']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['subject']) : "";
$address= isset($_POST['address']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['address']) : "";
$discuss= isset($_POST['discuss']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['discuss']) : "";
$city= isset($_POST['city']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['city']) : "";
$store= isset($_POST['store']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['store']) : "";
$message= isset($_POST['message']) ? preg_replace("/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message']) : "";

$body= $name; $email; $phone; $services; $subject; $address; $discuss; $city; $store; $message;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = 2;                   // Enable verbose debug output
    $mail->isSMTP();                        // Set mailer to use SMTP
    $mail->Host       = 'smtp.mandrillapp.com;';    // Specify main SMTP server
    $mail->SMTPAuth   = true;               // Enable SMTP authentication
    $mail->Username   = 'oyindamolamuritala@gmail.com';     // SMTP username
    $mail->Password   = '44eccc7f2a7306b31901bc8bb25a2374-us14';         // SMTP password
    $mail->SMTPSecure = 'tls';              // Enable TLS encryption, 'ssl' also accepted
    $mail->Port       = 465;                // TCP port to connect to

    $mail->setFrom('from@example.com', 'Mailer');           // Set sender of the mail
    $mail->addAddress('oyindamolamuritala@gmail.com', 'Leo');           // Add a recipient
    $mail->addAddress('hello@ivassaltd.com');   // Name is optional

    $mail->addAttachment('url', 'filename');    // Name is optional

    $mail->isHTML(true);                                  
    $mail->Subject = 'Subject';
    $mail->Body    = 'HTML message body in <b>bold</b>!';
    $mail->AltBody = 'Body in plain text for non-HTML mail clients';


    $mail->send();
    echo "Form submitted successfully!"; 

} catch (Exception $e){
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

}

?>








// Define some constants
// define("RECIPIENT_NAME", "Leo");
// define("RECIPIENT_EMAIL", "oyindamolamuritala@gmail.com");

// Read the form values
// $success = false;
// $name = isset($_POST['name']) ? preg_replace("/[^\.\-\' a-zA-Z0-9]/", "", $_POST['name']) : "";
// $senderEmail = isset($_POST['email']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email']) : "";
// $phone = isset($_POST['phone']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['phone']) : "";
// $services = isset($_POST['services']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['services']) : "";
// $subject = isset($_POST['subject']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['subject']) : "";
// $address = isset($_POST['address']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['address']) : "";
// $discuss = isset($_POST['discuss']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['discuss']) : "";
// $city = isset($_POST['city']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['city']) : "";
// $store = isset($_POST['store']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['store']) : "";
// $message = isset($_POST['message']) ? preg_replace("/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message']) : "";

// $mail_subject = 'A contact request send by ' . $name;

// $body = 'Name: ' . $name . "\r\n";
// $body .= 'Email: ' . $senderEmail . "\r\n";


// if ($phone) {
//   $body .= 'Phone: ' . $phone . "\r\n";
// }
// if ($services) {
//   $body .= 'Services: ' . $services . "\r\n";
// }
// if ($subject) {
//   $body .= 'Subject: ' . $subject . "\r\n";
// }
// if ($address) {
//   $body .= 'Address: ' . $address . "\r\n";
// }
// if ($discuss) {
//   $body .= 'Discuss: ' . $discuss . "\r\n";
// }
// $body .= 'message: ' . "\r\n" . $message;
// if ($city) {
//   $body .= 'City: ' . $city . "\r\n";
// }
// if ($store) {
//   $body .= 'Store: ' . $store . "\r\n";
// }


// If all values exist, send the email
// if ($name && $senderEmail && $message) {
//   $recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
//   $headers = "From: " . $name . " <" . $senderEmail . ">";
//   $success = mail($recipient, $mail_subject, $body, $headers);
<!-- //   echo "<div class='inner success'><p class='success'>Thanks for contacting us. We will contact you ASAP!</p></div><!-- /.inner -->";
<!-- // } else {
//   echo "<div class='inner error'><p class='error'>Something went wrong. Please try again.</p></div><!-- /.inner -->"; -->
// } -->