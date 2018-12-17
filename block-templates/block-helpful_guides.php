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
    <div class="container">
        <div class="helpful-guide-content">
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

            <?php if(is_array($labels)) : ?>
                <div class="guide-groups">
                    <?php foreach ($labels as $count => $label) : ?>
                        <?php if(1 == $count): ?>
                            <div class="guide-group-segment">
                            <div class="guide-group-segment-inner">
                        <?php endif; ?>
                        <div class="guide-group group-<?php echo $count; ?>" style="<?php echo ($count == 0 ? $bg_image_css : ''); ?>">
                            <div class="guide-group-inner">
                                <a href="<?php echo $label['destination']; ?>" class="title"><?php echo $label['label']; ?></a>
                            </div>
                        </div>
                        <?php if(count($labels) == $count): ?>
                                </div><!-- .guide-group-segment-inner -->
                            </div><!-- .guide-group-segment -->
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div><!-- .guide-groups -->
            <?php endif; ?>
        </div><!-- .helpful-guide-content -->
    </div><!-- .container -->
</article><!-- .block-property-types-## -->
