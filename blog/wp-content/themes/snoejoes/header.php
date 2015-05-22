<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/foundation.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <?php wp_head(); ?>
</head>
<body>

  <nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><a href="#">Sno-E Joe's</a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">

    </ul>

    <!-- Left Nav Section -->
    <ul class="left">
      <li><a href="http://www.snoejoes.com">Home</a></li>
      <li><a href="http://www.snoejoes.com/#flavors">Flavors</a></li>
      <li class="active"><a href="http://www.snoejoes.com/blog">Blog</a></li>
    </ul>
  </section>
</nav>

  <div class="fullwidth header-wrap">
    <header class="row">
      <div class="columns large-4">
        <img class="logo" src="<?php get_template_directory(); ?>/img/snoejoes-logo.png" alt="Sno-E Joe's Logo" />
      </div>
      <div class="columns large-8">
        <p class="chalkboard">Welcome to our <span class="red">Blog</span> where we keep you <span class="green">updated</span> on news and promotions!</p>
      </div>
    </header>
  </div>
