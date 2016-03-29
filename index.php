<?php get_header(); ?>

<div class="container content">
  <div class="row">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <p><?php the_content(); ?></p>

    <?php endwhile; else : ?>

      <p><?php _e('Sorry, no posts found.') ?></p>
      
    <?php endif; ?>

  </div>
</div>

<?php get_footer(); ?>
