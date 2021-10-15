<!DOCTYPE html>
<html>
<head>
</head>
<?php wp_head() ?>
<body>

<header class="site-header">
  <div class="site-identity">
   <?php if (function_exists('the_custom_logo')) {
		
		$custom_logo_id = get_theme_mod('custom_logo');
		$logo = wp_get_attachment_image_src($custom_logo_id);
	}   ?>
	<img  class="custom-logo" src="<?php echo $logo[0] ?>" alt="logo">

    <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name') ?></a></h1>
  </div>  
  <nav class="site-navigation">
    <ul class="nav">
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
      <div class="hd-search">
        
        <?php  get_search_form(); ?>
      </div>
      
    </ul>
  </nav>
</header>
</body>
</body>
</html>