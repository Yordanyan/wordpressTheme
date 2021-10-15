<?php 

function site_styles(){
	wp_enqueue_style('style' , get_template_directory_uri()."/css/style.css", array(), '1.0' , 'all');
	wp_enqueue_script('style' , get_template_directory_uri()."/js/script.js", array(), '1.0' , 'all');
}
add_action('wp_enqueue_scripts' , 'site_styles');



add_theme_support( 'custom-logo' );
function themename_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 100,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}
 function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Footer Menu' )
     )
   );
 add_theme_support( 'post-formats', array( 'aside', 'gallery' , 'link' , 'image' , 'video' , 'quote' , 'status' , 'audio' , 'chat' ) );
 }
add_action('init','register_my_menus');
//Add featured image support
 add_theme_support( 'post-thumbnails' );
 add_image_size('small-thumbnail' , 180, 120, true);
 add_image_size('recent-thumbnail' , 255, 200, true);
 add_image_size('slider' , 900, 600, true);
 add_image_size('single-thumbnail' , 900, 500, true);
  add_image_size('last-thumbnail' , 300, 250, true);
 add_image_size('search-thumbnail' , 500, 350, true);
  add_image_size('blogpage-thumbnail' , 799, 279, true);





add_filter( 'pre_get_posts','search_only_blog_posts' );

function search_only_blog_posts( $query ) {

    if ( $query->is_search ) {

        $query->set( 'post_type', 'post' );
    }
    return $query;
}


function custom_excerpt_length(){
  return 18;
  }
add_filter('excerpt_length', 'custom_excerpt_length');



///Widgets

function my_sidebar(){

  register_sidebar(
 array(

       'name' => 'Page Sidebar',
       'id' => 'page-sidebar',
       'before_widget' => '<div class="widget-item">',
       'after_widget' => '</div>',
       'before_title' => '<h4 class="widget-title">',
       'after_title' => '</h4>'

 )
  );
   register_sidebar(
 array(

       'name' => 'Blog Sidebar',
       'id' => 'blog-sidebar',
       'before_widget' => '<div class="widget-item">',
       'after_widget' => '</div>',
       'before_title' => '<h4 class="widget-title">',
       'after_title' => '</h4>'
 )
  );
     register_sidebar(
 array(

       'name' => 'Footer Area1',
       'id' => 'footer-sidebar1',
       'before_widget' => '<div class="footerarea1">',
       'after_widget' => '</div>',
       'before_title' => '<h4 class="widget-title">',
       'after_title' => '</h4>'
 )
  );
        register_sidebar(
 array(

       'name' => 'Footer Area2',
       'id' => 'footer-sidebar2',
       'before_widget' => '<div class="footerarea2">',
       'after_widget' => '</div>',
       'before_title' => '<h4 class="widget-title">',
       'after_title' => '</h4>'
 )
  );
           register_sidebar(
 array(

       'name' => 'Footer Area3',
       'id' => 'footer-sidebar3',
       'before_widget' => '<div class="widget-item">',
       'after_widget' => '</div>',
       'before_title' => '<h4 class="widget-title">',
       'after_title' => '</h4>'
 )
  );
              register_sidebar(
 array(

       'name' => 'Footer Area4',
       'id' => 'footer-sidebar4',
       'before_widget' => '<div class="footerarea4">',
       'after_widget' => '</div>',
       'before_title' => '<h4 class="widget-title">',
       'after_title' => '</h4>'
 )
  );
}
add_action('widgets_init', 'my_sidebar');
add_theme_support('widgets');


///Last 3 posts by author
 function thelast(){

    global $authordata;

    $author = get_the_author();

    $author_3_posts = new WP_Query(array(
     "author" => $author,
     "posts_per_page" => 3
    ));

    if($author_3_posts->have_posts()){
        echo "<h5>Last Posts by Author</h5>";
        echo "<div>";
        while($author_3_posts->have_posts()){
            $author_3_posts->the_post();
            ?>
            <div class="thelast">
                <a href="<?php the_permalink(); ?>">
                     <div class="img-fluid rounded" ><?php the_post_thumbnail('small-thumbnail');?></div>
                </a>
                <a href="<?php the_permalink(); ?>"> 
                  <?php the_title(); ?> 
                </a>
                    <a class="admina" href="#"><?php echo get_the_author(); ?></a>
                <div><?php the_time("Y F j "); ?></div>
               </div>
              
            <?php }
            echo "</div>";
    }
}

function firstcat(){
  $query = new WP_Query( [ 'cat' => 2 ,'posts_per_page' => 3] );
// The Loop
if ( $query->have_posts() ) {
    echo "<h5>Last Posts by Category</h5>";
    echo '<div class="thelast">';
    while ( $query->have_posts() ) {
        $query->the_post();?>
               <div class="thelast">
                <a href="<?php the_permalink(); ?>">
                     <div class="img-fluid rounded" ><?php the_post_thumbnail('small-thumbnail');?></div>
                </a>
                <a href="<?php the_permalink(); ?>"> 
                  <?php the_title(); ?> 
                </a>
                    
                <div><?php the_time("Y F j "); ?></div>
               </div>
               <?php
    }
    echo '</div>';
} else {
    // no posts found
}
/* Restore original Post Data */
wp_reset_postdata();
}
////////     Post Cards
function blog(){
    $blog = new WP_Query(array(
     "posts_per_page" => 6
    ));

    if($blog->have_posts()){
    
        echo "<div>";
        while($blog->have_posts()){
            $blog->the_post();
            ?>
            
                <div class="blog">
                <a href="<?php the_permalink(); ?>">
                     <div class="img-fluid rounded" ><?php the_post_thumbnail('last-thumbnail');?></div>
                </a>
                <a href="<?php the_permalink(); ?>"> 
                  <?php the_title(); ?> 
                </a>
                    <a class="admina" href="#"><?php echo get_the_author(); ?></a>
                <div><?php the_time("F j, Y g:i a"); ?></div>
               </div>
            
            <?php }
            echo "</div>";
    }
}









?>