<title><?php bloginfo('name'); ?></title>
<?php get_header();
if(is_page('Contact')):
  ?>
<h1> Contact</h1>
<?php else: ?>
<section class="post_body">
	
	
	<p><?php  the_content(); ?></p>
</section>

<?php endif; ?>

<?php get_footer(); ?>