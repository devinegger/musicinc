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

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		    <div class="interior" id="page-header">
                <img src="<?php echo get_template_directory_uri() ?>/images/playingkidscarousel.jpg" />
            </div>
            <div class="container page-interior">
                <?php
                    while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/content', 'page' );

                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                            endif;

                    endwhile; // End of the loop.
                ?>
            </div>
            <div class="container">
                <div class="row">
                    <div class="form-section">
                        <?php echo do_shortcode('[contact-form-7 id="47" title="Send a Message"]'); ?>
                    </div>
                </div>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
