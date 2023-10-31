<?php
/*
Template Name: Accueil
*/
?>

<?php get_header(); ?>

<section class="about-section">
    <div class="wrapper">
        <h2>Page d'accueil</h2>
    </div>
</section>

<section class="cars-section-single">
    <div class="wrapper">

        <h2>Nos dernières voitures</h2>

        <?php get_template_part('template-parts/content/content-portfolio'); ?>

<!--        --><?php //include('template-parts/content/content-portfolio.php'); ?>


    </div>
</section>

<?php include('template-parts/partials/contact.php'); ?>

<?php get_footer(); ?>