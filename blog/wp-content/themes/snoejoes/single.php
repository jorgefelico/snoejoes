<?php
get_header();
?>

<div class="row">
<a href="http://www.snoejoes.com/blog/">&lt;&lt; Go Back</a>
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

	<h1><?php the_title(); ?></h1>
  <?php the_content(); ?>

	<?php endwhile; ?>
<?php endif; ?>

</div>
<?php
get_footer();
 ?>
