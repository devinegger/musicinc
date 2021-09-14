<?php
//  A simple 3 column grid to display kid quotes 
    $args = array(
        'post_type' => 'KidQuotes',
        'posts_per_page' => 3,
        'order' => 'ASC'
    );
    
    $quotes = new WP_Query($args);
    
    while ( $quotes->have_posts() ) : $quotes -> the_post();
        echo '<div class="col-md-4 col-sm-4 col-xs-12">';
        echo '<div class="kid_quote">';
        echo '<figure class="round-feature">';
        the_post_thumbnail('medium');
        echo '</figure>';
        echo '<h4 class="kid_quote_name">' . get_the_title() . '</h4>';
        echo '<p class="kid_quote_content">';
        the_content();
        echo '</p>';
        echo '</div>';
        echo '</div>';
    endwhile;
    
    wp_reset_query();       
?>



