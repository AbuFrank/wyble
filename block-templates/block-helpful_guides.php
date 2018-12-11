<?php
/**
 * Block Template: Property Types
 *
 * @package wyble
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

// Get all sub fields
$title = get_sub_field('title');
$copy = get_sub_field('copy');
$labels = get_sub_field('labels');
$image = get_sub_field('image');
$bg_image_css = "background-image: url('" . $image['url'] . "');'";
$article_classes = 'block guides';
?>

<article <?php post_class($article_classes); ?>>
    <div class="entry-content">
        <div class="guide-groups">
            <?php foreach ($labels as $count => $label) : ?>
                <div class="guide-group" style="<?php print ($count == 0 ? $bg_image_css : ''); ?>">
                    <div class="guide-group-inner">
                        <div class="title">
                            <a href="<?php echo $label['destination']; ?>"><?php echo $label['label']; ?></a>
                        </div>
                    </div>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </div><!-- .entry-content -->
</article><!-- .block-property-types-## -->
