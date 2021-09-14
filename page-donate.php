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
		    
		    <?php while ( have_posts() ) : the_post(); ?>
		    
		    <div class="interior" id="page-header">
                <img src="<?php echo get_template_directory_uri() ?>/images/playingkidscarousel.jpg" />
            </div> 
            <div class="container text-center page-interior">
                <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </header><!-- .entry-header -->
                <div class="row">
                    <h5>You can bring MUSIC to a child's life today.</h5>
                    <div class="col-md-3">
                        <figure class="round-feature">
                            <img src="<?php echo get_template_directory_uri() ?>/images/25Gift.jpg" />
                        </figure>
                        <h4>$25 Donation</h4>
                        <p>Accessible Music Education</p>
                        <?php echo do_shortcode('[accept_stripe_payment name="$25 Donation" quantity="n/a" price="25" button_text="Donate"]'); ?>
                    </div>
                    <div class="col-md-3">
                        <figure class="round-feature">
                            <img src="<?php echo get_template_directory_uri() ?>/images/100Gift.jpg" />
                        </figure>
                        <h4>$100 Donation</h4>
                        <p>1 Month of Cello Lessons</p>
                        <?php echo do_shortcode('[accept_stripe_payment name="$100 Donation" quantity="n/a"  price="100" button_text="Donate"]'); ?>
                    </div>
                    <div class="col-md-3">
                        <figure class="round-feature">
                            <img src="<?php echo get_template_directory_uri() ?>/images/500Gift.jpg" />
                        </figure>
                        <h4>$500 Donation</h4>
                        <p>1 Semester of Suzuki Classes</p>
                        <?php echo do_shortcode('[accept_stripe_payment name="$500 Donation" quantity="NA" price="500" button_text="Donate"]'); ?>
                    </div>
                    <div class="col-md-3">
                        <figure class="round-feature">
                            <img src="<?php echo get_template_directory_uri() ?>/images/1000Gift.jpg" />
                        </figure>
                        <h4>$1000 Donation</h4>
                        <p>1 Year of Instruction</p>
                        <?php echo do_shortcode('[accept_stripe_payment name="$1000 Donation" quantity="NA" price="1000" button_text="Donate"]'); ?>
                    </div>
                </div>
                <div class="row">
                    <div style="text-align: center;">
                        <p style="margin: 20px 0;">-or-</p>
                        <?php echo do_shortcode('[accept_stripe_payment price="0" name="Test donation for a good cause" button_text="Custom Amount"]'); ?>
                        <h6> Music in Urban Schools Inspiring Change  is a 501(c)-3 orgnization
                        <br/><br/>All donations are tax deductiable</h6>
                    </div>
                </div>
                <div class="row">
                    <?php the_content(); ?>
                </div>
            </div>
            
            <?php endwhile; ?>
            
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
