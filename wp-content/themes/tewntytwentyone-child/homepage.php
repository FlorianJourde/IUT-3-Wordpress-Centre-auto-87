<?php
/*
Template Name: Accueil
*/
?>

<?php get_header(); ?>

<section class="image-decoration-section">
    <div class="wrapper">
        <div class="page">
            <div class="left-section">
                <h2 class="title-decoration">Trouvez la voiture idéale à deux pas de Limoges !</h2>
                <p>Notre concession automobile propose une vaste sélection de voitures neuves et d'occasion de marques françaises et internationales.</p>
                <p>Chez nous, vous trouverez le véhicule parfait pour répondre à vos besoins et à votre budget !</p>
                <p>Basés à Limoges, nous sommes fiers de servir la communauté locale depuis plus de 10 ans. En tant que passionnés de l'industrie automobile, notre mission est de vous offrir des véhicules de qualité, alliant performance, fiabilité et économie. Découvrez pourquoi tant de particuliers et professionnels font confiance à notre expertise en matière de voitures neuves et d'occasion.</p>
                <a href="/a-propos" class="button-primary button-red">En savoir plus</a>
            </div>
            <div class="right-section image-decoration">
                <img src="<?= get_home_url() . '/wp-content/themes/tewntytwentyone-child/assets/images/photo/car-drive.jpg'; ?>" alt="Conduite de voiture avec volant">
            </div>
        </div>
    </div>
</section>

<section class="numbers-section">
    <div class="wrapper">
        <div class="box">
            <div class="number-details">
                <img src="<?= get_home_url() . '/wp-content/themes/tewntytwentyone-child/assets/images/pictos/experience-picto-white.png'; ?>" alt="Pictogramme années d'expérience">

                <h3>+<?= get_field('annees_dexperiences'); ?></h3>
                <p>années d'expérience</p>
            </div>
            <div class="number-details">
                <img src="<?= get_home_url() . '/wp-content/themes/tewntytwentyone-child/assets/images/pictos/key-car-picto-white.png'; ?>" alt="Pictogramme ventes par semaine">

                <h3>+<?= get_field('ventes_par_semaine'); ?></h3>
                <p>ventes par semaines</p>
            </div>
            <div class="number-details">

                <img src="<?= get_home_url() . '/wp-content/themes/tewntytwentyone-child/assets/images/pictos/car-model-picto-white.png'; ?>" alt="Pictogramme voitures exposées">
                <h3>+<?= get_field('voitures_exposees'); ?></h3>
                <p>voitures exposées</p>
            </div>
        </div>
    </div>
</section>

<div class="road-separator">
        <img class="car-picto appear-on-scroll" src="<?= get_home_url() . '/wp-content/themes/tewntytwentyone-child/assets/images/background/car-left.svg'; ?>" alt="Pictogramme voiture">
</div>

<section class="cars-section">
    <div class="wrapper">

        <h2 class="title-decoration">Nos dernières voitures</h2>

        <?php get_template_part('template-parts/content/content-portfolio'); ?>

    </div>
</section>

<section class="brands-section">
    <div class="wrapper">

        <?php include('template-parts/partials/brands-section.php'); ?>

    </div>
</section>

<div class="road-separator">
        <img class="car-picto right appear-on-scroll" src="<?= get_home_url() . '/wp-content/themes/tewntytwentyone-child/assets/images/background/car-right.svg'; ?>" alt="Pictogramme voiture">
</div>

<?php if (count(get_field('recommandations')) >= 2) { ?>

    <section class="testimonials-section">
        <div class="wrapper">
            <h2>Ils parlent de nous</h2>
            <div class="swiper testimonials">
                <div class="swiper-wrapper">

                    <?php foreach (get_field('recommandations') as $recommandation) { ?>

                        <div class="swiper-slide testimonial">
                            <div class="profile-picture">
                                <img src="<?= get_home_url() . '/wp-content/themes/tewntytwentyone-child/assets/images/pictos/person-picto-white.png'; ?>" alt="Recommandation">
                            </div>
                            <div class="comment">
                                <?= $recommandation['description']; ?>
                            </div>
                            <div class="author">
                                <?= $recommandation['nom']; ?>
                            </div>
                        </div>

                    <?php } ?>
                    
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>

<?php } ?>

<?php include('template-parts/partials/action-section.php'); ?>

<?php get_footer(); ?>