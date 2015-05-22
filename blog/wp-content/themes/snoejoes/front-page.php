<?php
get_header();
?>

<div class="fullwidth">


  <div class="row">
    <div class="featured columns large-12">
      <?php
      query_posts('posts_per_page=1&cat=2');
      if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <div class="columns large-6">
        <?php  if ( has_post_thumbnail() ) {
          the_post_thumbnail('large');
        } ?>
      </div>
      <div class="columns large-6">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="date-published"><?php echo get_the_date(); ?></div>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>" class="button primary radius">Read More</a>
      <?php endwhile; ?> <?php wp_reset_query();?>
    </div>
  </div>
</div>

<div class="row">
  <ul class="large-block-grid-3 post-summary">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <?php if(in_category('2')){

        } else { ?>
          <li class="postItem">
            <div class="inside-wrap">
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <div class="date-published"><?php echo get_the_date(); ?></div>
              <?php  if ( has_post_thumbnail() ) {
                the_post_thumbnail('large');
              } ?>
              <?php the_excerpt(); ?>
              <a href="<?php the_permalink(); ?>" class="button radius success">Read More</a>
            </div>
          </li>
          <?php } ?>


        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</ul>
<?php
get_footer();
?>
