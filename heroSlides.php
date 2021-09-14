<?php
//  ... hero slides
    
    $i = 0;
    $args = array(
        'post_type' => 'HeroSlides',
        'posts_per_page' => 3,
        'order' => 'ASC'
    );
    
    $slides = new WP_Query($args);
    
    while ( $slides->have_posts() ) : $slides -> the_post();
        $slider_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
        
        if($i==0) {
            $active = "active";
        } else {
            $active = "";
        }
        
        echo '<div class="item ' . $active . '">';
        echo '<div class="carousel-content">';
        echo '<div class="carousel-text">';
        the_content();
        echo '</div>';
        echo '</div>';
        
        echo '<img class="d-block img-fluid" src="'.esc_url($slider_img_url).'" />'; 
        echo '</div>';
        $i += 1;
    endwhile;
  
        /* link thumbnail to full size image for use with lightbox
        echo '<a href="'.$featured_img_url).'" rel="lightbox">'; 
            the_post_thumbnail('thumbnail');
        echo '</a>';
    */
    
    wp_reset_query();       
?>



