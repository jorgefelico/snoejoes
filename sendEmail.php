<?php
session_start();
require_once "recaptchalib.php";

// your secret key
$secret = "6LfcWQcTAAAAAJQLQ6XmeFbnXTq7TDskZgONiR0V";

// empty response
$response = null;

// check secret key
$reCaptcha = new ReCaptcha($secret);

// if submitted check response
if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}

if ($response != null && $response->success) {

  $name = $_POST['name'];
  $number = $_POST['number'];
  $email = $_POST['email'];
  $message = $_POST['message'];

$to = "joseph@snoejoes.com";
$from = "Sno-E Joe's System <no-reply@snoejoes.com>";
$subject = "Message for Sno-E Joe's";

$headers = "From: $from" . "\r\n" . "Reply-To: $email" . "\r\n";


  $email = "Hello, Here is a message from one of your customers.\r\n \r\n
  Name: $name \r\n
  Number: $number \r\n
  E-Mail: $email \r\n
  Message: $message \r\n";

$email = wordwrap($email, 70, "\r\n");
mail($to, $subject, $email, $headers);
$_SESSION['msg'] = "Thank you for contact us, we will respond shortly.";
header("Location: http://www.snoejoes.com/contact.php");

  } else {
echo "you aint no human";
  }
 ?>
