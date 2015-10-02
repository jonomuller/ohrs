


<head>
  <title><?php the_title(); ?></title>
  <!-- <link rel="icon" type="image/png" href="images/favicon.ico"/> -->
</head>

<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-9">
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>

        <div class="post">
          <h2 class="title"><?php the_title(); ?></h2>

          <?php if (has_post_thumbnail()) : ?>
          <div class="post-thumb">
            <a href="<? the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
          </div>
          <?php endif; ?>

          <?php the_content(); ?>
        </div>

      <?php endwhile; ?>

      <?php endif; ?>
    </div>
    <div class="col-xs-12 col-md-3">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
