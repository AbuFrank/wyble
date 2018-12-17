<?php
/**
 * Template Name: Landing Page
 *
 * General Landing Page Template
 *
 * @package wyble
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header();
$container = 'landing-page';
?>

<div class="wrapper" id="full-width-page-wrapper">

    <div class="<?php echo esc_attr( $container ); ?>" id="content">

<!--        <div class="row">-->

            <div class="content-area" id="primary-landing">

                    <?php
                    while ( have_posts() ) : the_post();

                        if( have_rows('wyble-blocks') ):

                            // loop through the rows of data
                            while ( have_rows('wyble-blocks') ) : the_row();

                                // Get block template based on block asked for. Make sure templates are created first
                                get_template_part( 'block-templates/block', get_row_layout() );

                            endwhile;

                        endif;

                    endwhile; // end of the loop. ?>

            </div><!-- #primary -->

        <!-- </div> --><!-- .row end -->

    </div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
