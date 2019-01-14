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
$selections = get_sub_field('selections');
$article_classes = 'block property-types';
$thumbnail_size = 'medium'; // thumbnail, medium, large, etc.
?>

<article <?php post_class($article_classes); ?>>
    <div class="property-type-content">
        <div class="property-type-inner">
            <div class="container">
                <?php if($title) : ?>
                    <div class="property-type-header">
                        <h3><?php echo $title; ?></h3>
                    </div><!-- .property-type-header -->
                <?php endif; ?>
                <?php if($selections) : ?>
                    <div class="property-type-elements">
                        <?php foreach ($selections as $selection) : ?>
                            <div class="property-type-element-container">
                                <div class="property-type-element" style="background-image: url('<?php echo $selection['image']['sizes'][$thumbnail_size]; ?>');">
                                        <a href="<?php echo $selection['link']['url']; ?>" class="title"><?php echo $selection['title']; ?></a>
                                </div><!-- .property-type-element -->
                            </div><!-- .property-type-element-container -->
                        <?php endforeach; ?>
                    </div><!-- .property-type-elements -->
                <?php endif; ?>
            </div><!-- /.container -->
        </div><!-- .property-type-inner -->
    </div><!-- .property-type-content -->
</article><!-- .block-property-types-## -->