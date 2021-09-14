<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MusicInc
 */

get_header(); ?>

	<div id="primary" class="content-area front-page">
		<main id="main" class="site-main">
            <div id="musicincCarousel" class="carousel slide" data-ride="carousel" data-interval="10000">
                <ol class="carousel-indicators">
                    <li data-target="#musicincCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#musicincCarousel" data-slide-to="1"></li>
                    <li data-target="#musicincCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <?php get_template_part('heroSlides'); ?>
                </div>
                <a class="left carousel-control" href="#musicincCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#musicincCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            
            <div class="container text-center section">
                <h2>Bridging the Accessibility Gap in Music Education</h2>
                <h4>Students in Chicago schools don’t have equal access to music education. 
                <br/>Our goal is to bridge that gap.</h4>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <span class="glyphicon glyphicon-music" style="font-size: 4em; padding: 15px 0; color: #fac94f;"></span>
                        <p>K-12 tuition-free instrumental music programs</p>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <span class="glyphicon glyphicon-apple" style="font-size: 4em; padding: 15px 0; color: #03846f;"></span>
                        <p>On-site programming at Chicago schools</p>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <span class="glyphicon glyphicon-education" style="font-size: 4em; padding: 15px 0; color: #a85266;"></span>
                        <p>Success in school through strong social support</p>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <span class="glyphicon glyphicon-heart" style="font-size: 4em; padding: 15px 0; color: #013ca6;"></span>
                        <p>Lifelong love for music and the arts</p>
                    </div>
                </div>
                <a href="/musicinc/about-us/#barriers">LEARN MORE ABOUT THE MUSIC EDUCATION GAP</a>
             </div>
             
             <div class="parallax" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/sheetmusicparallax.jpg');">
                <div class="parallax-overlay">
                     <div class="container text-center section">
                        <div class="parallax-content">
                            <h1>MUSIC Inc.</h1>
                            <h3>Our Story</h3>
                            <p style="padding-top: 20px">We believe all students deserve to make music, regardless of background. That’s why we cultivate music and mentorship programming in Chicago’s underserved communities. Each day we witness the power of music to transform a student’s life, and we’re on a mission to make that possible—for everyone.</p>
                            <a class="block-button" href="<?php echo home_url() ?>/about-us">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>            
            
            <div class="container text-center section">
                <div id="kid-quotes">
                    <?php get_template_part('kidQuotes'); ?>
                </div>
            </div> <!-- /container -->
            
            <?php
                // - if there is a 'featured' event, then display this next parallax section
                // - don't display the page section if not
                // - ~DGE
                $featured = new WP_Query( 'cat=0&posts_per_page=1' );
        
                while($featured->have_posts()) : $featured->the_post();
            ?>
            <div class="parallax" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/violincarousel.jpg');">
                <div class="parallax-overlay-dark">
                    <div class="container text-center section" >
                        <div class="parallax-content">
                            <?php get_template_part( 'template-parts/content-featured', get_post_format() ); ?>
                        </div>
                     </div>
                </div>
            </div>
            <?php  endwhile; // End of the loop. ?>
            
            <div class="container text-center section">
                <div id="social">
                    <h5>Get Connected</h5>
                    <?php echo do_shortcode('[social_icons_group id="192"]'); ?>
                </div>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
