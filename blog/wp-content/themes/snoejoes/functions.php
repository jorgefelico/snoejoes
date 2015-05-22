<?php
// Replace the default [...]
function trim_excerpt($text) {
  $text = str_replace('[&hellip;]', '', $text);
  return $text;
}
add_filter('get_the_excerpt', 'trim_excerpt');

// Add support for featured thumbnails.
add_theme_support( 'post-thumbnails' );

// Replace logo
function my_login_logo() { ?>
  <style type="text/css">
  .login h1 a {
    background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/snoejoes-logo.png);
    width: 250px;
    height: 250px;
    background-size: 250px auto;
  }
  #login{
    padding: 3% 0 0;
  }
  </style>
  <?php }
  add_action( 'login_enqueue_scripts', 'my_login_logo' );

  // Replace Logo Url
  function my_login_logo_url() {
    return home_url();
  }
  add_filter( 'login_headerurl', 'my_login_logo_url' );

  // Replace logo title
  function my_login_logo_url_title() {
    return "Sno-E Joe's";
  }
  add_filter( 'login_headertitle', 'my_login_logo_url_title' );

  // THIS INCLUDES THE THUMBNAIL IN OUR RSS FEEDs
function insertThumbnailRSS($content) {
global $post;
if ( has_post_thumbnail( $post->ID ) ){
  $content = '<content>'. $content. '</content><thumbnail>' .get_the_post_thumbnail( $post->ID, 'large' ). '</thumbnail>';
}
return $content;
}

add_filter('the_excerpt_rss', 'insertThumbnailRSS');
add_filter('the_content_feed', 'insertThumbnailRSS');
  ?>
