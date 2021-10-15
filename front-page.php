<?php wp_head(); ?>
<?php get_header(); ?>
<title><?php bloginfo('name'); ?></title>
<?php
echo do_shortcode('[smartslider3 slider="2"]');
?>
<div class="container1">
<?php 
      blog();

 ?>
</div>
<?php get_footer(); ?>