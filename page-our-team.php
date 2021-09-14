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
                
                <!-- CO FOUNDERS -->
                <div class="row">
                    <?php
                        $args = array(
                            'post_type' => 'teamMembers',
                            'posts_per_page' => 2,
                            'role' => 'co-founder',
                            'order' => 'ASC'
                        );

                        $quotes = new WP_Query($args);
                        
                        echo '<h2 class="section-header">Co-Founders</h2>';

                        while ( $quotes->have_posts() ) : $quotes -> the_post();
                            echo '<div class="col-md-6 col-sm-6 col-xs-12">';
                            echo '<div class="container text-center">';
                            echo '<figure class="round-feature">';
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
                
                <!-- Board of Directors -->
                <div id="board" class="section-divider"><hr/></div>
                
                <div class="row">
                    <?php
                        $args = array(
                            'post_type' => 'teamMembers',
                            'role' => 'board-of-directors',
                            'order' => 'ASC'
                        );

                        $quotes = new WP_Query($args);
                        
                        echo '<h2 class="section-header">Board of Directors</h2>';

                        while ( $quotes->have_posts() ) : $quotes -> the_post();
                            echo '<div class="col-md-4 col-sm-4 col-xs-12">';
                            echo '<div class="container text-center">';
                            echo '<h4>' . get_the_title() . '</h4>';
                            echo '</div>';
                            echo '</div>';
                        endwhile;

                        wp_reset_query();       
                    ?>
                </div>
                
                <!-- Advisory Board -->
                <div class="row">
                    <?php
                        $args = array(
                            'post_type' => 'teamMembers',
                            'role' => 'advisory-board',
                            'order' => 'ASC'
                        );

                        $quotes = new WP_Query($args);
                        
                        echo '<h2 class="section-header">Advisory Board</h2>';

                        while ( $quotes->have_posts() ) : $quotes -> the_post();
                            echo '<div class="col-md-4 col-sm-4 col-xs-12">';
                            echo '<div class="container text-center">';
                            echo '<h4>' . get_the_title() . '</h4>';
                            echo '</div>';
                            echo '</div>';
                        endwhile;

                        wp_reset_query();       
                    ?>
                </div>

                <!-- Staff -->
                <div id="staff" class="section-divider"><hr/></div>
                
                <div class="row">
                    <?php
                    //  A simple 3 column grid to display cofounders
                        $args = array(
                            'post_type' => 'teamMembers',
                            'role' => 'staff',
                            'order' => 'ASC'
                        );

                        $quotes = new WP_Query($args);
                        
                        echo '<h2 class="section-header">Our Staff</h2>';

                        while ( $quotes->have_posts() ) : $quotes -> the_post();
                            echo '<div class="col-md-4 col-sm-4 col-xs-12">';
                            echo '<div class="container text-center">';
                            echo '<h4>' . get_the_title() . '</h4>';
                            echo '</div>';
                            echo '</div>';
                        endwhile;

                        wp_reset_query();       
                    ?>
                </div>
                
                <!-- Program Directors -->
                <div class="row">
                    <?php
                        $args = array(
                            'post_type' => 'teamMembers',
                            'role' => 'program-directors',
                            'order' => 'ASC'
                        );

                        $quotes = new WP_Query($args);
                    
                        echo '<h2 class="section-header">Program Directors</h2>';

                        while ( $quotes->have_posts() ) : $quotes -> the_post();
                            echo '<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">';
                            echo '<div class="container text-center">';
                            echo '<figure class="round-feature">';
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
                
                <!-- Teaching Artists -->
                <div class="row">
                    <?php
                        $args = array(
                            'post_type' => 'teamMembers',
                            'role' => 'teaching-artists',
                            'order' => 'ASC'
                        );

                        $quotes = new WP_Query($args);
                        
                        echo '<h2 class="section-header">Teaching Artists</h2>';

                        while ( $quotes->have_posts() ) : $quotes -> the_post();
                            echo '<div class="col-md-4 col-sm-4 col-xs-12">';
                            echo '<div class="container text-center">';
                            echo '<h4>' . get_the_title() . '</h4>';
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
