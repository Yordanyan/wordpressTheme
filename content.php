<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


<div id="main-content" class="blog-page">
    <div class="container">
        <div class="row clearfix">
            
            <div class="col-lg-7">
               <div class="card single_post">
                    <div class="body">
                      <div class="img-fluid rounded" ><?php the_post_thumbnail('slider-thumbnail');?></div>
                       <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p>	<?php the_excerpt(); ?></p>
                    </div>
                    <div class="footer">
                        <div class="actions">
                            <a href="<?php the_permalink(); ?>" class="btn btn-outline-secondary">Read More</a>
                        </div>

                       
                    </div>
              </div>
          </div>
 <div class="col-lg-3">
                
                <?php dynamic_sidebar('page-sidebar'); ?>
       
 
           
         </div>

    </div>

    </div>
    
    