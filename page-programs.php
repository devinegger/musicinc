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
            <div class="container page-interior text-center">
                <div class="row" style="padding-bottom: 60px;">
                    <img src="<?php echo get_template_directory_uri() ?>/images/programs_flowchart.png" />                
                </div>
            </div>
            <div class="container page-interior">
                <div class="row">
                    <div class="col-lg-3 col-md-3 co l-sm-3 col-xs-3 programs-tab-menu">
                        <div class="list-group">
                            <a href="#" class="list-group-item active text-center">
                                <h4 class="glyphicon glyphicon-heart"></h4>
                                <br/>Early Childhood
                            </a>
                            <a href="#" class="list-group-item text-center">
                                <h4 class="glyphicon glyphicon-education"></h4>
                                <br/>El Sistema Project
                            </a>
                            <a href="#" class="list-group-item text-center">
                                <h4 class="glyphicon glyphicon-globe"></h4>
                                <br/>Community Engagement Programs
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 programs-tab">
                        <!-- flight section -->
                        <div class="programs-tab-content active">
                            <img src="<?php echo get_template_directory_uri() ?>/images/SuzukiProgram.jpg" style="display: inline-block; width: 100%; padding-bottom: 10px;"/>
                            <h2 style="margin-top: 0;color:#013ca6">Early Childhood  (Daytime Programming)</h2>
                            <p><strong>KinderMUSIC:</strong> In this foundational program, kindergarten students explore and engage in a variety of new musical concepts. Teaching artists create lesson plans alongside classroom teachers. Music skills go hand-in-hand with school objectives such as counting, letter recognition, and social-emotional development.</p>
                            <ul>
                                <li>45 minutes of instruction per week during the school day</li>
                                <li>Serves the entire kindergarten grade level</li>
                                <li>Lessons taught at Chicago schools</li>
                            </ul>
                            <p><strong>Suzuki Strings:</strong> Designed specifically for first and second graders, Suzuki Strings offers beginner-level lessons that can lead youth to a lifetime of love for music and the arts. With additional Saturday Family Suzuki classes, parents can learn alongside their young beginner.</p>
                            <ul>
                                <li>2.5 hrs of instruction per week during the school day</li>
                                <li>Serves first and second grade students (ages 6-8)</li>
                                <li>Lessons taught at Chicago schools</li>
                            </ul> 
                        </div>
                        <!-- train section -->
                        <div class="programs-tab-content">
                            <img src="<?php echo get_template_directory_uri() ?>/images/ElSistema.jpg" style="display: inline-block; width: 100%; padding-bottom: 10px;"/>
                            <h2 style="margin-top: 0;color:#013ca6">El Sistema Project (After-school programs)</h2>
                            <p>The El Sistema philosophy is to create access to high quality music education in underserved communities. MUSIC Inc. promotes this mission by providing at-risk youth with multiple after-school and weekend programs that are affordable, flexible, and focused on character development.</p>
                            <ul>
                                <li>8-10 hours of full orchestra ensemble instruction per week </li>
                                <li>Serves students ages 8-18</li>
                                <li>Lessons taught at Chicago schools and community youth centers</li>
                            </ul>
                            <p><strong>School sites:</strong> Orchestra programs are taught at Chicago schools in a safe and engaging space for students to learn and grow during after-school hours.</p>
                            <p><strong>Youth centers:</strong> Provides after-school orchestra programs at community youth centers to reach students who do not attend school sites served by MUSIC Inc.</p>
                            <p><strong>Saturday Conservatory Program:</strong> This supplementary program is designed for highly dedicated and motivated students. Students gain additional ensemble training in a chamber setting, music theory, and semi-private lessons. </p>
                        </div>                            
                        <div class="programs-tab-content">
                            <img src="<?php echo get_template_directory_uri() ?>/images/communityEngagement.jpg" style="display: inline-block; width: 100%; padding-bottom: 10px;"/>
                            <h2 style="margin-top: 0;color:#013ca6">Community Engagement</h2>
                            <p>Part of MUSIC Inc’s commitment to music education is community engagement. We love bringing music to all areas of a community, whether that’s through concerts at community centers or mentorship opportunities with professional musicians. Youth enrolled in MUSIC Inc programs and students in surrounding school communities can participate in these programs.</p>
                            <ul>
                                <li>Artists in Residence: Connects students with professional musicians through interactive concerts and workshops. </li>
                                <li>Honors Orchestra: Engages an elite student performance group with active volunteerism by providing concerts at community centers, senior homes, and hospitals.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container page-interior">
                <h3>WHERE WE SERVE</h3>
                <p>MUSIC Inc currently serves students at these locations. If you are a school, community center, senior home, hospital, or park district who wants to partner with MUSIC Inc, contact us at <a href="mailto:info@MusicIncChicago.org">info@MusicIncChicago.org</a> or call <a href="tel:13128549895">(312) 854-9895</a>.</p>
                <p>Are you a parent? Register your student today.</p>
                <p style="text-align: center; margin-top: 5%;">
                    <a class="button-block black" href="/musicinc/register">Register Now!</a>
                </p>
                <p><strong>North Lawndale</strong></p>
                <ul>
                    <li>KIPP Ascend Primary</li>
                    <li>KIPP Ascend Middle</li> 
                    <li>Blessed Sacrament Youth Center</li>
                    <li>St. Agatha Catholic Church</li>
                </ul>
                <p><strong>Archer Heights</strong></p>
                <ul>
                    <li>Academy for Global Citizenship</li>
                </ul>
                <p><strong>Garfield Park</strong></p>
                <ul>
                    <li>KIPP One Academy</li>
                </ul>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
