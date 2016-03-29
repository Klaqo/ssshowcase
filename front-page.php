<?php get_header(); ?>

<div class="container content">
  <div class="row">
    
    <?php
    $args = array('post_type' => 'collection', 'posts_per_page' => 30);
    $query = new WP_Query($args);
    $i = 1;
    ?>

    <?php if($query->have_posts()) : while ($query->have_posts()) : $query -> the_post(); ?>

      <div class="col-md-4 post-image">
        <div class="image-overlay"><?php the_title(); ?></div>
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail('', array('class' => 'img-responsive')); ?>
        </a>
      </div>

      <?php if ($i % 3 === 0) {

        echo "</div><div class='row'>";

      } $i++ ?>

    <?php endwhile; else : ?>

      <p><?php _e('Sorry, no posts found.') ?></p>

    <?php endif; wp_reset_postdata(); ?>
  </div>
</div>

<?php get_footer(); ?>
