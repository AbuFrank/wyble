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
$selections = get_sub_field('selections');
$article_classes = 'block property-types';
$thumbnail_size = 'medium'; // thumbnail, medium, large, etc.
?>

<article <?php post_class($article_classes); ?>>
    <div class="entry-content">
        <div class="container">
            <div class="property-type-elements">
                <?php
                foreach ($selections as $selection) {
                    ?>
                    <div class="property-type-element" style="background-image: url('<?php echo $selection['image']['sizes'][$thumbnail_size]; ?>');">
                        <div class="title">
                            <a href="<?php echo $selection['link']['url']; ?>"><?php echo $selection['title']; ?></a>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div><!-- /.container -->
    </div><!-- .entry-content -->
</article><!-- .block-property-types-## -->