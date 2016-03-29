<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title('|', true, right); bloginfo('name'); ?></title>
  <meta name="description" content=" " />
  <meta name="author" content=" " />
  <meta name="HandheldFriendly" content="true" />
  <meta name="MobileOptimized" content="320" />
  <!-- Use maximum-scale and user-scalable at your own risk. It disables pinch/zoom. Think about usability/accessibility before including.-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

  <header>
    <div class="navcontainer" >
      <nav class="navbar navbar-default" >
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand logo" href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo('name'); ?></a>
          </div>

          <?php

          $defaults = array(
            'container' => 'ul',
            'theme_location' => 'primary-menu',
            'menu_class' => 'nav navbar-nav navbar-right activecatcher'
          );

          wp_nav_menu( $defaults );

          ?>

          <!--
          <ul class="nav navbar-nav navbar-right">
          <li><a href="#" class="active">Photography</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      -->
    </div>
  </nav>
</div>
</header>
