<head>
  <title>OHRS</title>
  <!-- <link rel="icon" type="image/png" href="images/favicon.ico"/> -->
</head>

<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-9">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <h2><?php the_title(); ?></h2>
      <h4><?php the_time('F jS, Y') ?></h4>
      <p><?php the_content(__('(more...)')); ?></p>
      <hr> <?php endwhile; else: ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
    </div>
    <div class="col-xs-12 col-md-3">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
