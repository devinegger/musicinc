	<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MusicInc
 */

get_header(); ?>

	<div id="primary" class="content-area page-interior">
		<main id="main" class="site-main">
		    <div id="page-header">
                <img src="<?php echo get_template_directory_uri() ?>/images/playingkidscarousel.jpg" />
            </div>
            <div class="container page-interior text-center">
                <?php
                    while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/content', 'page' );
                    endwhile; // End of the loop.
                ?>
                
                
                <!-- Foundation Support -->
                <div class="row">
                    <?php
                        $args = array(
                            'post_type' => 'supporters',
                            'level' => 'foundation-support',
                            'order' => 'ASC'
                        );

                        $quotes = new WP_Query($args);
                    
                        echo '<h2 class="section-header">Foundation Support</h2>';

                        while ( $quotes->have_posts() ) : $quotes -> the_post();
                            echo '<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">';
                            echo '<div class="container text-center">';
                            echo '<figure class="logo-feature">';
                            the_post_thumbnail('medium');
                            echo '</figure>';
                            echo '<h4>' . get_the_title() . '</h4>';
                            the_content();
                            echo '</div>';
                            echo '</div>';
                        endwhile;

                        wp_reset_query();       
                    ?>
                </div>
                
                <!-- Community Partnerships -->
                <div class="row">
                    <?php
                        $args = array(
                            'post_type' => 'supporters',
                            'level' => 'community-partnerships',
                            'order' => 'ASC'
                        );

                        $quotes = new WP_Query($args);
                    
                        echo '<h2 class="section-header">Community Partnerships</h2>';

                        while ( $quotes->have_posts() ) : $quotes -> the_post();
                            echo '<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">';
                            echo '<div class="container text-center">';
                            echo '<figure class="logo-feature">';
                            the_post_thumbnail('medium');
                            echo '</figure>';
                            echo '<h4>' . get_the_title() . '</h4>';
                            the_content();
                            echo '</div>';
                            echo '</div>';
                        endwhile;

                        wp_reset_query();       
                    ?>
                </div>
                
                
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
