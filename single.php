<?php get_header(); ?>

<div class="collection-nav">
  <div class="back">

    <?php
    $prev_post = get_previous_post();
    if (!empty( $prev_post )): ?>
    <a href="<?php echo $prev_post->guid ?>"><span class="glyphicon glyphicon-menu-left"></span></a>
    <?php endif ?>

  </div>
  <div class="next">

  <?php
  $next_post = get_next_post();
  if (!empty( $next_post )): ?>
  <a href="<?php echo get_permalink( $next_post->ID ); ?>"><span class="glyphicon glyphicon-menu-right"></span></a>
  <?php endif; ?>

  </div>
</div>


<div class="container">
  <div class="content">
    <div class="row">
      <div class="col-md-12 single-blog">

        <?php if(have_posts()) : while (have_posts()) : the_post(); ?>


          <h1><?php the_title(); ?></h1>
          <span class="meta-singleblog">
            <?php echo get_avatar( get_the_author_meta('ID'), 18); ?> <?php the_author(); ?> - <?php the_time('F j, Y'); ?>
          </span>

          <hr />

          <p class="blog">
            <?php the_content(); ?>
          </p>

          <div class="comments">

            <?php echo comments_template(); ?>

          </div>

        <?php endwhile; else : ?>

          <p><?php _e('Sorry, no posts found.') ?></p>

        <?php endif; wp_reset_postdata(); ?>

      </div>
    </div>
  </div>
</div>




<?php get_footer(); ?>
