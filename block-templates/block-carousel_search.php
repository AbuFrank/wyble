<?php
/**
 * Block Template: Carousel Search
 *
 * Owl carousel slider with section for property search
 * @package wyble
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Get all sub fields
$images = get_field('images');
$search_background_color = get_field( 'search_background_color' );
$search_background_opacity = get_field( 'search_background_opacity' );

?>
<div class="block carousel-search jumbotron jumbotron-fluid bg-primary text-white">
        <div class="carousel" style="background: blue;">
            <div class="owl-carousel" data-slider-id="1">
                <?php foreach( $images as $image ) : ?>
                    <div data-src="<?php echo $image['image']; ?>" ><img src="<?php echo $image['image']; ?>"></div>
                <?php endforeach; ?>
            </div><!-- .owl-carousel -->

        </div><!-- .carousel -->
</div><!-- .carousel-search -->

    <div class="owl-thumbs" data-slider-id="1">
        <?php foreach( $images as $image ) : ?>
        <div class="owl-thumb-item"><img src="<?php echo $image['image']; ?>" /></div>
        <?php endforeach; ?>
    </div><!-- .owl-thumbs -->
<?php /*
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

    <div class="carousel-inner" role="listbox">

        <?php dynamic_sidebar( 'hero' ); ?>

    </div>

    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">

        <span class="carousel-control-prev-icon" aria-hidden="true"></span>

        <span class="sr-only"><?php esc_html_e( 'Previous', 'understrap' ); ?></span>

    </a>

    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">

        <span class="carousel-control-next-icon" aria-hidden="true"></span>

        <span class="sr-only"><?php esc_html_e( 'Next', 'understrap' ); ?></span>

    </a>

</div><!-- .carousel -->

<script>
    jQuery( ".carousel-item" ).first().addClass( "active" );
</script>
*/ ?>
