<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MusicInc
 */

?>

	</div><!-- #content -->
	
    <div id="footer-top" style="text-align: center; padding: 3% 0; background: #5a5a5a; color: #fff; background-image: url('https://www.transparenttextures.com/patterns/fake-brick.png');">
        <h4>Your contribution will change a child's life forever.</h4>
        <a href="<?php echo home_url();?>/donate" class="block-button">Donate Now</a>
    </div>
    
    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
    <div id="newsletter-front" style="text-align: center;">
        <form action="//MusicIncChicago.us8.list-manage.com/subscribe/post?u=3e54ef02ab348780c995cfcd3&amp;id=dd1d55b16e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div id="mc_embed_signup_scroll">
                <h4>Subscribe to the MUSIC Inc. newsletter to stay in the know.</h4>
                
                <div class="input-prepend" style="display: inline-block;">
                    <input type="text" name="FNAME" class="" id="mce-FNAME" placeholder="First Name">
                </div>
                <div class="input-prepend" style="display: inline-block;">
                    <input type="text" value="" name="LNAME" class="" id="mce-LNAME" placeholder="Last Name">
                </div>
                <br/>
                <div class="input-prepend" style="display: inline-block;">
                    <input type="email" class="required email" id="mce-EMAIL" name="EMAIL" size="40" placeholder="Email Address">
                </div>
                <br />
                <div id="mce-responses" class="clear">
                    <div class="response" id="mce-error-response" style="display:none"></div>
                    <div class="response" id="mce-success-response" style="display:none"></div>
                </div>
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_3e54ef02ab348780c995cfcd3_dd1d55b16e" tabindex="-1" value=""></div>
                <div class="clear text-center"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
            </div>
        </form>
    </div>
    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='MMERGE3';ftypes[3]='text';fnames[4]='MMERGE4';ftypes[4]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
    
	<footer id="colophon" class="site-footer">
		<div class="container">
            <div class="row">
                <div class="footer-contents" style="text-align: center; padding: 5%;">
                    <div class="col-md-4 col-sm-4" style="text-align: left;">
                        <?php dynamic_sidebar( 'third-footer-widget' ); ?>
                    </div>
                    <div class="col-md-4 col-sm-4" style="padding-top: 10px; font-size: 1.2em; font-weight: 100; letter-spacing: .1em;">
                        <?php dynamic_sidebar( 'second-footer-widget' ); ?>
                    </div>
                    <div class="col-md-4 col-sm-4" style="text-align: right;">
                        <?php dynamic_sidebar( 'first-footer-widget' ); ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="text-align:center;">
                    <p style="font-size: 20px !important;">Prospective Students: <a href="/musicinc/register">REGISTER HERE</a></p>
                </div>
            </div>
            <div class="row">
                <div class="site-info">
                    <div class="col-md-6 col-sm-4 flex flex-left">
                        <p>&copy;2017 Music Inc, Chicago.</p>
                    </div>
                    <div class="col-md-6 col-sm-8 flex flex-right">
                        <p style="text-align: right;">Dreamscape Development | Strange Design + Technology</p>
                    </div>
                </div><!-- .site-info -->
            </div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
