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
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$use_overlay = get_sub_field('use_overlay');
$overlay_color = get_sub_field('overlay_color');
$overlay_opacity = get_sub_field('overlay_opacity');
$show_quotes = get_sub_field('show_quotes');
$quote1 = get_sub_field('quote_1');
$quote2 = get_sub_field('quote_2');

$cta_class = ($type == 'std' ? 'std' : 'parallax');
$article_classes = 'block cta cta-' . $cta_class;


if($use_overlay) :
    // get rgba value
    $rgba = hexToRgba($overlay_color, $overlay_opacity);

    // create ccs rule
    $overlay = "background: rgba(" . $rgba . ");";
endif;
?>
<?php if('std' == $cta_class) : ?>
    <article <?php post_class($article_classes); ?>>
        <div class="container">
            <div class="cta-content">
                <?php if($copy): ?>
                    <div class="cta-copy">
                        <?php echo $copy; ?>
                    </div><!-- .cta-copy -->
                <?php endif; ?>
                <?php if ($image) : ?>
                    <div class="cta-image">
                        <?php echo wp_get_attachment_image( $image['id'], 'large' ); ?>
                    </div><!-- .cta-image -->
                <?php endif; ?>
                <?php if($button_location && $button_copy): ?>
                    <div class="cta-button">
                        <a class="btn btn-primary" role="button" href="<?php the_permalink($button_location->ID); ?>"><?php echo $button_copy; ?></a>
                    </div><!-- .cta-button -->
                <?php endif; ?>
            </div><!-- .cta-content -->
        </div><!-- .container -->
    </article>
<?php elseif('parallax' == $cta_class): ?>
    <article <?php post_class($article_classes); ?> style="background-image: url('<?php echo $image['url']; ?>');">
            <?php if($use_overlay) : ?>
                <div class="container-overlay" style="<?php echo $overlay; ?>">
            <?php endif; ?>
            <div class="container">
                <div class="cta-content">
                <?php if( isset($title) || isset($subtitle)) : ?>
                    <div class="cta-header">
                        <h3><?php echo isset($title) ? $title : '' ?></h3>
                        <h4><?php echo isset($subtitle) ? $subtitle : '' ?></h4>
                    </div>
                <?php endif; ?>
                <?php if(!$show_quotes) : ?>
                    <?php if (isset($copy)) : ?>
                        <div class="cta-copy">
                            <?php echo $copy; ?>
                        </div>
                    <?php endif; ?>
                <?php else: ?>
                    <div class="cta-quotes">
                        <div class="quote-1"><?php echo $quote1; ?></div>
                        <div class="quote-2"><?php echo $quote2; ?></div>
                    </div><!-- .cta-quotes -->
                <?php endif; ?>
                <?php if (isset($button_location) && isset($button_copy)) : ?>
                    <div class="cta-button">
                        <a class="btn btn-secondary" role="button" href="<?php the_permalink($button_location->ID); ?>"><?php echo $button_copy; ?></a>
                    </div><!-- .cta-button -->
                <?php endif; ?>
                </div><!-- .cta-content -->

            </div><!-- .container -->
            <?php if($use_overlay): ?>
                </div> <!-- /container-overlay -->
            <?php endif; ?>
    </article><!-- .block-cta-## -->
<?php endif; ?>
