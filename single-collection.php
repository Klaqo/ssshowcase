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


<div class="container-fluid content">

  <div class="row">
    <div class="col-md-12 collection">

      <?php if(have_posts()) : while (have_posts()) : the_post(); ?>

        <h1><?php the_title(); ?></h1>
        <hr />
        <span class="authoranddate">
          <!-- author default to author, override with custom field // date is a custom field -->
          <?php the_field('authoranddate'); ?>
        </span>

        <div class="description">
          <?php the_field('description'); ?>
        </div>
        <div class="responsive-images">

          <?php the_field('images'); ?>

        </div>

      </div>

    <?php endwhile; else : ?>

      <p><?php _e('Sorry, no posts found.') ?></p>

    <?php endif; wp_reset_postdata(); ?>

  </div>
</div>

<?php get_footer(); ?>
