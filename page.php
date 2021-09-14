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

	<div id="primary" class="content-area page">
		<main id="main" class="site-main">
		    <div id="page-header">
                <img src="<?php echo get_template_directory_uri() ?>/images/playingkidscarousel.jpg" />
            </div>
            <div class="container page-interior">
                <?php
                while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/content', 'page' );

                endwhile; // End of the loop.
                ?>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->
	
	
	

<?php
get_footer();
