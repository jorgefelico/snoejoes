<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="If you have any questions about our louisville slushies, snow cones, shave ice, hawaiian shaved ice or snowballs, fill out this form to contact us.">
  <title>Sno-E Joe's Shaved Ice - Contact Us</title>
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/foundation.min.css" />
  <link rel="stylesheet" href="css/foundation-icons/foundation-icons.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
  <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>

  <?php include('./partials/nav.html'); ?>

  <div class="fullwidth header-wrap">
    <header class="row">
      <div class="columns large-4">
        <img class="logo" src="img/snoejoes-logo.png" alt="Sno-E Joe's Logo" />
      </div>
      <div class="columns large-8">
        <p class="chalkboard">Shaved Ice with <span class="red">unique flavors</span> or <span class="green">create your own</span> favorite flavors. <span class="yellow">Drinks</span> and also packaged <span class="blue">ice creams</span> available.</p>
      </div>
    </header>
  </div>

  <div class="fullwidth flavors-wrap">
    <div class="row">
      <div class="columns large-8 large-offset-2">

        <?php if(isset($_SESSION['msg'])){ ?>
          <div data-alert class="alert-box success radius">
            Thank you, a staff member will be in touch.
            <a href="#" class="close">&times;</a>
          </div>
          <?php } session_destroy(); ?>

          <div id="flavors" class="flavors">
            <h2>To contact us, please fill out the form below.</h2>
            <form action="sendEmail.php" method="post">
              <label>Name
                <input type="text" name="name" placeholder="Name">
              </label>

              <label>Number
                <input type="number" name="number" placeholder="Number">
              </label>

              <label>E-Mail
                <input type="email" name="email" placeholder="E-Mail">
              </label>

              <label>Message
                <textarea rows="5" name="message" placeholder="Message"></textarea>
              </label>

              <label>Human Verification
                <div class="g-recaptcha" data-sitekey="6LfcWQcTAAAAAB7c8ilEItA1w4LMU7Xqy_Qbqek5"></div>
              </label>
              <br>
              <button class="radius" type="submit">Send It</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  include('./partials/footer.php');
  ?>
</body>
</html>
