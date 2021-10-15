
	<?php wp_head() ?>
	<title><?php bloginfo('name') ?></title>

<?php get_header() ?>
<main>
	


  
<?php if(have_posts()): ?>
 <h2>Search result for: <?php the_search_query(); ?></h2>

	<?php 
  while(have_posts()):
  the_post();?>

<div class="thelast">
                <a href="<?php the_permalink(); ?>">
                     <div class="img-fluid rounded" ><?php the_post_thumbnail('search-thumbnail');?></div>
                </a>
                <a href="<?php the_permalink(); ?>"> 
                  <?php the_title(); ?> 
                </a>
                    
                <div><?php the_time("Y F j "); ?></div>
               </div>
  <?php ?>
	<?php endwhile;
endif; ?>
		</div>
	</div>
 </main>

<?php get_footer() ?> 
