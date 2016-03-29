<div class="footer-clear"></div>
<footer>
  <?php

  $defaults = array(
    'container' => 'ul',
    'theme_location' => 'primary-menu',
    'menu_class' => 'footer-nav activecatcherfoot'
  );

  wp_nav_menu( $defaults );

  ?>
</footer>
<?php wp_footer(); ?>

<?php if (is_single() || is_category() || is_tag() || is_search()) { ?>
  <script type="text/javascript">
  jQuery("li.current_page_parent").children('a').addClass('active');
  </script>
  <?php } ?>
</body>
</html>
