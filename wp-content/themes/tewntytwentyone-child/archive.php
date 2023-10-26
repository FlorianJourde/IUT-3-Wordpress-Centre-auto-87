<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

$description = get_the_archive_description();
?>

<section class="cars-section box">
    <div class="wrapper wrapper-wide">
<!--        <h1>Nos voitures</h1>-->



<!--        --><?php //if ( have_posts() ) :
//        include ('')
        get_template_part('template-parts/content/content-portfolio');

        // ?>


<!--        </div>-->

    </div>
</section>

<?php
get_footer();
