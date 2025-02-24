<?php
/*
Template Name: À propos
*/

get_header();

?>

<section class="image-decoration-section">
    <div class="wrapper">
        <div class="page">
            <div class="left-section">
                <h2 class="title-decoration">Qui sommes-nous ?</h2>
                <p>Centre auto 87, votre concessionnaire de confiance à Couzeix, à deux pas de Limoges, est dédié à offrir une expérience automobile exceptionnelle !</p>
                <p>Notre vaste inventaire de voitures d'occasion, principalement de marques françaises, répond aux besoins de particuliers exigeants.</p>
                <p>Grâce à notre engagement envers la qualité, la fiabilité et la satisfaction du client, nous sommes devenus un pilier de la communauté automobile de Limoges.</p>
            </div>
            <div class="right-section">
                <div class="image-decoration">
                    <img src="<?= get_home_url() . '/wp-content/themes/twentytwentyone-child/assets/images/photo/car-keys.jpg'; ?>" alt="Voiture avec clés">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="image-decoration-section image-decoration-left">
    <div class="wrapper">
        <div class="page">
            <div class="left-section">
                <h2>Une voiture pour chaque besoin</h2>
                <p>Que vous cherchiez à acheter une nouvelle voiture ou à en apprendre davantage sur les dernières tendances de l'industrie, Centre Auto 87 est votre partenaire de confiance. </p>
                <p>Nous mettons tout en œuvre pour offrir un service exceptionnel, des offres spéciales avantageuses, et des véhicules éco-responsables pour une conduite de qualité.</p>
                <p>Explorez notre gamme de véhicules et découvrez pourquoi Centre auto 87 est le choix incontournable pour vos besoins automobiles à Limoges !</p>
                <a href="/voitures" class="button-primary button-red">Nos voitures</a>
            </div>
            <div class="right-section image-decoration">
                <!--<div class="image-decoration">-->
                    <img src="<?= get_home_url() . '/wp-content/themes/twentytwentyone-child/assets/images/photo/car-architechture.jpg'; ?>" alt="Car driving decoration">
                <!--</div>-->
            </div>
        </div>
    </div>
</section>

<?php include('template-parts/partials/action-section.php'); ?>

<?php

get_footer();


?>