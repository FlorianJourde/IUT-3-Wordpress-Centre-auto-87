<?php
/*
Template Name: Accueil
*/
?>

<?php get_header(); ?>

<section class="introduction-section">
    <div class="wrapper">
        <div class="page">
            <div class="left-section">
                <h2>Trouvez la voiture idéale à Couzeix, près de Limoges !</h2>
                <p>Notre concession automobile propose une vaste sélection de voitures neuves et d'occasion de marques françaises et internationales.</p>
                <p>Chez nous, vous trouverez le véhicule parfait pour répondre à vos besoins et à votre budget !</p>
                <p>Basés à Limoges, nous sommes fiers de servir la communauté locale depuis plus de 10 ans. En tant que passionnés de l'industrie automobile, notre mission est de vous offrir des véhicules de qualité, alliant performance, fiabilité et économie. Découvrez pourquoi tant de particuliers et professionnels font confiance à notre expertise en matière de voitures neuves et d'occasion.</p>
                <a href="/a-propos" class="button-primary button-red">En savoir plus</a>
            </div>
            <div class="right-section image-decoration">
                <img src="<?php echo get_home_url() . '/wp-content/themes/tewntytwentyone-child/assets/images/banner/car-drive.jpg'; ?>" alt="Car driving decoration">
            </div>
        </div>

    </div>
</section>

<section class="numbers-section">
    <div class="wrapper">
        <div class="box">
            <div class="number-details">
                <img src="<?php echo get_home_url() . '/wp-content/themes/tewntytwentyone-child/assets/images/pictos/experience-picto-white.png'; ?>" alt="Années d'expérience">
                <h3>+10</h3>
                <p>années d'expérience</p>
            </div>
            <div class="number-details">
                <img src="<?php echo get_home_url() . '/wp-content/themes/tewntytwentyone-child/assets/images/pictos/key-car-picto-white.png'; ?>" alt="Ventes par semaine">
                <h3>+50</h3>
                <p>ventes par semaines</p>
            </div>
            <div class="number-details">
                <img src="<?php echo get_home_url() . '/wp-content/themes/tewntytwentyone-child/assets/images/pictos/people-picto-white.png'; ?>" alt="Voitures exposées">
                <h3>+100</h3>
                <p>voitures exposées</p>
            </div>
        </div>
<!--        <div class="box"></div>-->
        <!--        <h2>Page d'accueil</h2>-->
    </div>
</section>

<section class="cars-section">
    <div class="wrapper">

        <h2>Nos dernières voitures</h2>

        <?php get_template_part('template-parts/content/content-portfolio'); ?>

    </div>
</section>

<section class="brands-section">
    <div class="wrapper">

        <?php include('template-parts/partials/brands-section.php'); ?>

    </div>
</section>

<section class="testimonials-section">
    <div class="wrapper">

    </div>
</section>

<section class="cta-section">
    <div class="wrapper">

    </div>
</section>

<?php //include('template-parts/partials/contact.php'); ?>

<?php get_footer(); ?>