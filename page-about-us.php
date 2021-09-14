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
		    
		    <?php while ( have_posts() ) : the_post(); ?>
		    
		    <div id="page-header">
                <img src="<?php echo get_template_directory_uri() ?>/images/playingkidscarousel.jpg" />
            </div>
            <div class="container page-interior">
                <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </header><!-- .entry-header -->
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <h4>Our Story Begins With A Violin</h4>
                        <p class="lead">When Chicago violinist Sarah Dupuis discovered a handful of used, child-size violins at a local music store, she decided to put them to good use.
                        <br/><br/>
                        In 2011 she partnered with social worker Joi Truman and co-founded Music in Urban Schools Inspiring Change (MUSIC Inc), a program that combines high-achieving music education and character development for students in Chicago’s west side communities.</p>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <img src="<?php echo get_template_directory_uri() ?>/images/MUSIC.Inc.Year.1.jpg" />
                    </div>
                </div>
                <div class="row" style="padding-top: 20px;">
                    <p>It soon became clear the love each student had for their instrument and the positive impact on their vision for the future. MUSIC Inc is rapidly growing and continues to find new ways to meet the unique needs and challenges of Chicago’s underserved communities.</p>
                    <p>In partnership with KIPP Ascend Primary School, a Chicago Public Charter School, the MUSIC Inc pilot program engaged 23 first-grade students in Suzuki-style, small group violin curriculum. MUSIC Inc was registered as a 501(c)3 organization in 2014.</p>
                </div>
            </div>
            
            <!-- Mission & Vision -->
            <div id="mission-vision" class="section-divider"><hr/></div>
            
            <div class="container text-center page-interior">
                <h2>MUSIC Inc.</h2>
                <div class="row">
                    <h3>Vision</h3>
                    <p class="large">Empower All children through music education</p>
                </div>
                <hr/>
                <div class="row">        	
                    <h3>Mission</h3>
                    <p  class="large">Empower underserved youth through world-class music education, while building character, promoting academic excellence, and fostering community.</p>
                </div>
                <hr/>
            </div>
            <div class="container">
                <div class="row">
                    <div style="width: 90%; margin: 0 auto;">
                        <div style="text-align: center; width: 100%;">
                            <h5>Our Values (<span class="red">A</span>.<span class="yellow">C</span>.<span class="blue">E</span>.)</h5>
                        </div>
                        <div class="col-md-4">
                            <h3 class="red">ACCESSIBILITY</h3>
                            <p>Eliminate the accessibility gap to world-class music regardless of socio-economic status by providing tuition-free orchestral instruction, available in schools and community centers.</p>
                        </div>
                        <div class="col-md-4">
                            <h3 class="yellow">COMMUNITY</h3>
                            <p>Foster community through collaboration and mentorship, by building lasting relationships with students, families, teachers and community leaders.</p>
                        </div>
                        <div class="col-md-4">
                            <h3 class="blue">EXCELLENCE</h3>
                            <p>Empower youth to reach their full potential in music, academics and beyond by encouraging responsibility and accountability.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <?php the_content(); ?>
            </div>
            
            <?php endwhile; ?>
            
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
