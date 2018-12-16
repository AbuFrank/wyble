<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

        <footer class="site-footer" id="colophon">
            <div class="contact">
                <div class="contact-inner">
                <?php if(get_field('contact_us_block')) : ?>
                    <?php //TODO: Display Contact Us Block ?>
                <?php else: ?>
                    <h3>Contact Us</h3>

                    <div class="exerpt">
                        Etiam rutrum. Aliquam blandit dui a libero. Prasesent tortor tortor, bibendum vehicula, accusan sed,
                    </div>
                    <div class="phone">
                        <span><a href="tel:+18005551234">443-555-1234</a></span>
                    </div>
                    <div class="address">
                        <div class="address1">219 High Street</div>
<!--                                <div class="address2">219 High Street</div>-->
                        <div class="city-state">Chestertown, MD</div>
                        <div class="zip">21620</div>
                    </div>
                    <div class="social">
                        <ul class="social-icons">
                            <li class="icon social-twitter">
                                <a href="https://twitter.com/"><span>Follow Us on Twitter</span></a>
                            </li>
                            <li class="icon social-facebook">
                                <a href="https://facebook.com/"><span>Like Us on Facebook</span></a>
                            </li>
                            <li class="icon social-instagram">
                                <a href="https://instagram/"><span>Follow Us on Instagram</span></a>
                            </li>
                        </ul>
                    </div>
                <?php endif; ?>
                </div>
            </div><!-- .contact -->

            <div class="map">
                <?php if(get_field('footer_map_block')) : ?>
                    <?php //TODO: Display Footer Map Block ?>
                <?php else: ?>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4400181.903780384!2d-73.48996814227607!3d42.6280359524839!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89dd1c78c8ad35f9%3A0x78e3336a8c0e778d!2sThe+Den+of+Marbletown!5e0!3m2!1sen!2sus!4v1544374582511" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                <?php endif; ?>
            </div>

            <div class="feed">
                <?php if(get_field('footer_feed_block')) : ?>
                    <?php //TODO: Display Footer Feed Block ?>
                <?php else: ?>
                    I don't know what this will end up being. Maybe an iFrame? Will style when needed.
                <?php endif; ?>
            </div>

        </footer><!-- #colophon -->

	</div><!-- container end -->

</div><!-- wrapper end -->

<div class="wrapper" id="wrapper-subfooter">

    <div class="<?php echo esc_attr( $container ); ?>">

        <div class="row">

            <div class="col-md-12">

                <footer class="site-subfooter" id="colophon">

                    <div class="copyright">

                        &copy; Copyright <?php echo date('Y'); ?>. Developed by <a href="https://creative-blazer">Creative Blazer</a>.

                    </div><!-- .site-info -->

                </footer><!-- #colophon -->

            </div><!--col end -->

        </div><!-- row end -->

    </div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

