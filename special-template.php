<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<title><?php bloginfo('name'); ?></title>
<?php 

/*
Template Name: Contact
 */
get_header();
?>
<div class="container">
 <div class="col-lg-6" style="display:inline-block;">
 <?php the_content(); ?>
	</div>



<div style="display:inline-block;">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3047.5636992715995!2d44.47779531485552!3d40.19652217692762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406abd719b57919b%3A0x6f5b51aee4e64196!2z1LnVuNaC1bTVuA!5e0!3m2!1shy!2s!4v1632984935818!5m2!1shy!2s" width="600px" height="600px" style="border:0; justify-content:center;" allowfullscreen="" loading="lazy"></iframe>
 </div>

</div>
<?php 
get_footer();
?>