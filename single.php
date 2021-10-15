<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head() ?>
	<?php get_header();?>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</head>
<body>
		 <div class="container mt-5">
            <div class="row">
                <div class="col-lg-9">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1"><?php the_title(); ?></h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2"><?php the_time("F j, Y g:i a"); ?></div>
                            <div><?php echo get_the_author(); ?></div>

                            <!-- Post categories-->
                           <?php 
                            $categories = get_the_category();

                            foreach ($categories as $key => $value) {
                                $link = get_category_link($value->term_id);

                                echo "<a class='badge bg-secondary text-decoration-none link-light' href='$link'>" . $value->name . "</a>";
                            }
                             ?>
                            
                        </header>
                        <!-- Preview image figure-->
                        <figure class="mb-4">
                            <div class="img-fluid rounded" ><?php the_post_thumbnail('single-thumbnail');?></div></figure>

                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4"><?php the_content(); ?></p>
                        </section>
                    </article>
                    <!-- Last Posts section-->
                    <div class="container1"><?php firstcat(); ?></div>
                    
             </div>

                <!-- Side widgets-->
                <div class="col-lg-3">
                    <!-- Search widget-->
                    
                  
                    <!-- Side widget-->
                 
                   <?php dynamic_sidebar('page-sidebar'); ?>
       
 
           


                    
               
           
        </div>
    </div>
        <!-- Footer-->
       
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </div>
        <?php  get_footer(); ?>
</body> 
</html>