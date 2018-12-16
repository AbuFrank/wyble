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
//$bg_image_css = "";
$article_classes = 'block guides';
?>

<article <?php post_class($article_classes); ?>>
    <div class="entry-content">
        <div class="container">
            <?php if($title): ?>
                <div class="title guide-title">
                    <h3><?php echo $title; ?></h3>
                </div><!-- /.guide-title -->
            <?php endif; ?>

            <?php if($copy): ?>
                <div class="guide-copy">
                    <?php echo $copy; ?>
                </div><!-- /.guide-title -->
            <?php endif; ?>

            <div class="guide-groups">
                <?php foreach ($labels as $count => $label) : ?>
                    <div class="guide-group group-<?php echo $count; ?>" style="<?php echo ($count == 0 ? $bg_image_css : ''); ?>">
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
        </div><!-- /.container -->
    </div><!-- .entry-content -->
</article><!-- .block-property-types-## -->
