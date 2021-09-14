<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package MusicInc
 */

get_header(); ?>

	<div id="primary" class="content-area page single text-center">
		<main id="main" class="site-main">

		<div class="container page-interior">
            <?php
            while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/content', 'single' );

            endwhile; // End of the loop.
            ?>
        </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
