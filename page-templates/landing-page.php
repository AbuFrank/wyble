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
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="full-width-page-wrapper">

    <div class="<?php echo esc_attr( $container ); ?>" id="content">

        <div class="row">

            <div class="col-md-12 content-area" id="primary">

                <main class="site-main" id="main" role="main">

                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'loop-templates/content', 'page' ); ?>

                        <?php
                        if( have_rows('wyble-blocks') ):

                            // loop through the rows of data
                            while ( have_rows('wyble-blocks') ) : the_row();

                                // Get block template based on block asked for. Make sure templates are created first
                                get_template_part( 'block-templates/block', get_row_layout() );

                            endwhile;
                            else: echo "Nope";

                        endif;
                        ?>

                        <?php
                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :

                            comments_template();

                        endif;
                        ?>

                    <?php endwhile; // end of the loop. ?>

                </main><!-- #main -->

            </div><!-- #primary -->

        </div><!-- .row end -->

    </div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
