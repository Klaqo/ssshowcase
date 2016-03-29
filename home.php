<?php get_header(); ?>

<div class="container content">
  <div class="row">


    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      
      <div class="col-md-6 iblog">
        <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
        <hr />
        <a href="<?php the_permalink(); ?>"><p class="excerpt">
          <?php the_excerpt(); ?>
        </p></a>
        <span class="metablog">
          <?php echo get_avatar( get_the_author_meta('ID'), 18); ?> <?php the_author(); ?> - <?php the_time('F j, Y'); ?>
        </span>
      </div>

    <?php endwhile; ?>

    <div class="pagination"><p>
      <?php posts_nav_link(' - ', __('Newer Posts'), __('Older Posts')); ?>
    </p></div>

  <?php else : ?>

    <p><?php _e('Sorry, no posts found.') ?></p>

  <?php endif; ?>

</div>
</div>

<?php get_footer(); ?>
