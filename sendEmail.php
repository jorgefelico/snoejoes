<?php
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

$to = "jorgefelico@gmail.com";
$from = "no-reply@snoejoes.com";
$subject = "Message for Sno-E Joe's";

  $email = "Hello, Someone submitted the following information\n\n";

  } else {

  }
 ?>
