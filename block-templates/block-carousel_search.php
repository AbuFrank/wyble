<?php
/**
 * Block Template: Carousel Search
 *
 * Owl carousel slider with section for property search
 * @package wyble
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

// Get all sub fields
$images = get_field('images');
$search_background_color = get_field('search_background_color');
$search_background_opacity = get_field('search_background_opacity');

?>
<div class="block carousel-search jumbotron jumbotron-fluid bg-primary text-white">
    <div class="carousel">
        <div class="owl-carousel" data-slider-id="1">
            <?php foreach ($images as $image) : ?>
                <div data-src="<?php echo $image['image']; ?>"><img src="<?php echo $image['image']; ?>"></div>
            <?php endforeach; ?>
        </div><!-- .owl-carousel -->
    </div><!-- .carousel -->

    <div class="container">
        <div class="owl-thumbs" data-slider-id="1">
            <?php foreach ($images as $image) : ?>
                <div class="owl-thumb-item" style="background-image: url('<?php echo $image['image']; ?>'); ">
                    <div class="owl-thumb-inner">
                        <img src="<?php echo $image['image']; ?>"/>
                    </div>
                </div>
            <?php endforeach; ?>
        </div><!-- .owl-thumbs -->

        <div class="search-facets">
            <div class="facet-container">
                <form action="#">
                    <div class="facets">
                        <select class="search-type">
                            <option value="title">How Many Beds</option>
                            <option value="option1">Option 1</option>
                            <option value="option2">Option 2</option>
                            <option value="option3">Option 3</option>
                        </select>

                        <input type="text" placeholder="How Manny Beds?">
                        <input type="text" placeholder="Maximum Price">

                        <select class="search-town">
                            <option value="title">Choose a town</option>
                            <option value="option1">Option 1</option>
                            <option value="option2">Option 2</option>
                            <option value="option3">Option 3</option>
                        </select>

                        <input type="text" placeholder="How many baths?">
                        <input type="text" placeholder="Maximum Price">

                    </div><!-- .facets -->

                    <div class="options">
                        <a href="/s" class="advanced-search">Advanced Search</a>
                        <button type="submit" class="btn btn-submit"><span>Search</span></button>
                    </div><!-- .options -->
                </form>
            </div><!-- .facet-container -->
        </div><!-- .search-facets -->
    </div><!-- .container -->
</div><!-- .carousel-search -->
