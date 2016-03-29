<?php

add_theme_support('automatic-feed-links');
add_theme_support('menus');
add_theme_support('post-thumbnails');

// CSS
function sss_theme_styles() {
  wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
  wp_enqueue_style( 'lightbox_css', get_template_directory_uri() . '/css/lightbox.min.css');
  wp_enqueue_style( 'googlefont_css', 'https://fonts.googleapis.com/css?family=Montserrat:400,700' );
  wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'sss_theme_styles' );

// JS
function sss_theme_js() {
  wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true);
  wp_enqueue_script('lightbox-plus-jquery_js', get_template_directory_uri() . '/js/lightbox-plus-jquery.min.js', array('jquery'), '', true);
  wp_enqueue_script('app_js', get_template_directory_uri() . '/js/app.js', array('jquery'), '', true);

}

add_action( 'wp_enqueue_scripts', 'sss_theme_js' );

function register_theme_menus() {
  register_nav_menus(
  array(
    'primary-menu' => __('Primary Menu')
    )
  );
}

add_action( 'init', 'register_theme_menus' );
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);


//Changing the text that comes after the excerpt
function sss_excerpt_more($more) {
  global $post;
  return "...  <span class='readmore'>Read More &raquo;</span>";
}

add_filter('excerpt_more', 'sss_excerpt_more');

//Changes the excerpt length from 55 to 50 words.
function sss_excerpt_length($length){
  return 50;
}

add_filter('excerpt_length', 'sss_excerpt_length', 999);

//Sets the menu [li] item to active
function special_nav_class($classes, $item){
  if( in_array('current-menu-item', $classes) ){
    $classes[] = 'iactive ';
  }
  return $classes;
}


?>
