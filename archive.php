<?php wp_head(); ?>
<?php get_header(); ?>
<h2>
	<?php 
     if( is_category()) {
     	 single_cat_title();
     }
     elseif (is_tag()) {
     	single_tag_title();
     }
     elseif(is_author()){
     	the_post();
     	echo "Author Archives" . get_the_author();
     }
     elseif(is_day()){
     	echo "Dayly Archives" . get_the_date();
     }
     elseif (is_month()) {
     	echo "Monthly Archives" . get_the_date("F Y");
     }
     elseif (is_year()) {
     	echo "Yearly Archives" . get_the_date("Y");
     }else{
     	single_cat_title();
     }
	 ?>

</h2>
<?php get_footer(); ?>