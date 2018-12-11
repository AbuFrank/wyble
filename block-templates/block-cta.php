<?php
/**
 * Block Template: CTA
 *
 * Both Parallax and Standard types
 * @package wyble
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Get all sub fields
$type = get_sub_field('type');
$copy = get_sub_field('copy');
$image = get_sub_field('image');
$button_copy = get_sub_field('button_copy');
$button_location = get_sub_field('button_location');


$cta_class = ($type == 'std' ? 'std' : 'parallax');
$article_classes = 'block cta cta-' . $cta_class;
?>

<article <?php post_class($article_classes); ?>>

    <?php if('std' == $cta_class) : ?>
        <div class="entry-content">
            <div class="cta-copy">
                <?php echo $copy; ?>
            </div>
            <div class="cta-image">
                <?php
                if (!empty($image)) :
                    echo wp_get_attachment_image( $image['id'], 'large' );
                endif;
                ?>
            </div>
        </div><!-- .entry-content -->
        <?php elseif('parallax' == $cta_class): ?>
        <div class="entry-content" style="background-image: url('<?php echo $image['url']; ?>');">
            <div class="cta-copy">
                <?php echo $copy; ?>
            </div>
        </div><!-- .entry-content -->
        <?php endif; ?>
</article><!-- .block-cta-## -->
