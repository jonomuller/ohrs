<head>
  <title>News</title>
</head>

<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-9">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <div class="post-header">
        <h5><?php the_time('F jS, Y') ?></h5>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      </div>

      <?php if (has_post_thumbnail()) : ?>

      <div class="post-thumb">
        <a href="<? the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
      </div>

      <?php endif; ?>

      <div class="post-content">
        <p><?php the_content(__('(more...)')); ?></p>
      </div>
      
      <?php endwhile; else: ?>
      <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
    </div>
    <div class="col-xs-12 col-md-3">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
