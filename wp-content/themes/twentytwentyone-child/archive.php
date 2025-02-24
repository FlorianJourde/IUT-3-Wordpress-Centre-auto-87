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

        </div>
    </section>

<section class="cars-section archive">
    <div class="wrapper">
        <div class="text-with-button">
            <h2 class="title-decoration">Nos voitures</h2>

            <?php

            $parts = parse_url($_SERVER['REQUEST_URI']);
            if ($parts['query']) {

                ?>

                <div class="buttons-wrapper">
                        <img class="brand" src="<?= get_home_url() . '/wp-content/themes/twentytwentyone-child/assets/images/brands/' . strtolower($_GET['marque']) . '-automobile-logo.png'; ?>" alt="<?= $_GET['marque'] ?> automobile logo">
                </div>

            <?php } ?>

        </div>

        <?php get_template_part('template-parts/content/content-portfolio'); ?>

    </div>
</section>

<?php include('template-parts/partials/action-section.php'); ?>

<?php
get_footer();
