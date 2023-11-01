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

<section class="brands-section box offset-top">
    <div class="wrapper">

        <?php include('template-parts/partials/brands-section.php'); ?>

        <?php

            $parts = parse_url($_SERVER['REQUEST_URI']);
            if ($parts['query']) {

        ?>

        <div class="buttons-wrapper">
            <a class="button-primary button-red" href="<?php echo get_post_type_archive_link( 'voitures' ); ?>">Réinitialiser les filtres</a>
        </div>

        <?php } ?>

    </div>
</section>

<section class="cars-section archive">
    <div class="wrapper">
        <h2>Nos voitures</h2>

        <?php get_template_part('template-parts/content/content-portfolio'); ?>

    </div>
</section>

<?php include('template-parts/partials/action-section.php'); ?>

<?php
get_footer();
