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
                <img src="<?php echo get_home_url() . '/wp-content/themes/tewntytwentyone-child/assets/images/photo/car-drive.jpg'; ?>" alt="Conduite de voiture avec volant">
            </div>
        </div>
    </div>
</section>

<section class="numbers-section">
    <div class="wrapper">
        <div class="box">
            <div class="number-details">
                <img src="<?php echo get_home_url() . '/wp-content/themes/tewntytwentyone-child/assets/images/pictos/experience-picto-white.png'; ?>" alt="Pictogramme années d'expérience">

                <h3>+<?php echo get_field('annees_dexperiences'); ?></h3>
                <p>années d'expérience</p>
            </div>
            <div class="number-details">
                <img src="<?php echo get_home_url() . '/wp-content/themes/tewntytwentyone-child/assets/images/pictos/key-car-picto-white.png'; ?>" alt="Pictogramme ventes par semaine">

                <h3>+<?php echo get_field('ventes_par_semaine'); ?></h3>
                <p>ventes par semaines</p>
            </div>
            <div class="number-details">

                <img src="<?php echo get_home_url() . '/wp-content/themes/tewntytwentyone-child/assets/images/pictos/car-model-picto-white.png'; ?>" alt="Pictogramme voitures exposées">
                <h3>+<?php echo get_field('voitures_exposees'); ?></h3>
                <p>voitures exposées</p>
            </div>
        </div>
    </div>
</section>

<div class="road-separator">
<!--    <div class="road-wrapper">-->
        <img class="car-picto appear-on-scroll" src="<?php echo get_home_url() . '/wp-content/themes/tewntytwentyone-child/assets/images/background/car-left.svg'; ?>" alt="Pictogramme voiture">
<!--    </div>-->
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
<!--    <div class="road-wrapper">-->
        <img class="car-picto right appear-on-scroll" src="<?php echo get_home_url() . '/wp-content/themes/tewntytwentyone-child/assets/images/background/car-right.svg'; ?>" alt="Pictogramme voiture">
<!--    </div>-->
</div>

<?php //var_dump(get_field('recommandations')); ?>


<?php if (count(get_field('recommandations')) >= 2) { ?>

    <section class="testimonials-section">
        <div class="wrapper">
            <h2>Ils parlent de nous</h2>
            <div class="swiper testimonials">
                <div class="swiper-wrapper">

                    <?php foreach (get_field('recommandations') as $recommandation) { ?>

                        <div class="swiper-slide testimonial">
                            <div class="profile-picture">
                                <img src="<?php echo get_home_url() . '/wp-content/themes/tewntytwentyone-child/assets/images/pictos/person-picto-white.png'; ?>" alt="Recommandation">
                            </div>
                            <div class="comment">
                                <?php echo $recommandation['description']; ?>
                            </div>
                            <div class="author">
                                <?php echo $recommandation['nom']; ?>
                            </div>
                        </div>

                    <?php } ?>

    <!--                <div class="swiper-slide testimonial">-->
    <!--                    <div class="profile-picture">-->
    <!--                        <img src="--><?php //echo get_home_url() . '/wp-content/themes/tewntytwentyone-child/assets/images/pictos/person-picto-white.png'; ?><!--" alt="Recommandation">-->
    <!--                    </div>-->
    <!--                    <div class="comment">-->
    <!--                        Bon accueil de la part de l'équipe et du gérant, il y a des véhicules pour tous les budgets. J'ai été bien conseillé, avec transparence, sur les véhicules et leur état. Les reprises se passent bien et simplement, on est loin des grandes concessions qui ne pense qu'au business et qui négligent les petits clients.  Je recommande!-->
    <!--                    </div>-->
    <!--                    <div class="author">-->
    <!--                        Guillaume B.-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="swiper-slide testimonial">-->
    <!--                    <div class="profile-picture">-->
    <!--                        <img src="--><?php //echo get_home_url() . '/wp-content/themes/tewntytwentyone-child/assets/images/pictos/person-picto-white.png'; ?><!--" alt="Recommandation">-->
    <!--                    </div>-->
    <!--                    <div class="comment">-->
    <!--                        Pas mal de véhicule sur parc, super bien conseillé, ils connaissent leurs véhicules et vous guide en fonction de vos besoins. Ils n ont pas cherché à me vendre à tt prix. J ai apprécié l accueil, les conseils et le choix bien sur. Ils ont etes très sympa, ca change des vendeurs habituel près à vous faire acheter n importe quoi. Bref, je recommande 👍-->
    <!--                    </div>-->
    <!--                    <div class="author">-->
    <!--                        Sylvain M.-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="swiper-slide testimonial">-->
    <!--                    <div class="profile-picture">-->
    <!--                        <img src="--><?php //echo get_home_url() . '/wp-content/themes/tewntytwentyone-child/assets/images/pictos/person-picto-white.png'; ?><!--" alt="Recommandation">-->
    <!--                    </div>-->
    <!--                    <div class="comment">-->
    <!--                        C’est la première fois que j’achète une voiture et vraiment ça a été rapide. Je suis jeune conducteur et je ne trouvais pas de voiture avant des les contacter. Merci beaucoup :)-->
    <!--                    </div>-->
    <!--                    <div class="author">-->
    <!--                        Anthony P.-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="swiper-slide testimonial">-->
    <!--                    <div class="profile-picture">-->
    <!--                        <img src="--><?php //echo get_home_url() . '/wp-content/themes/tewntytwentyone-child/assets/images/pictos/person-picto-white.png'; ?><!--" alt="Recommandation">-->
    <!--                    </div>-->
    <!--                    <div class="comment">-->
    <!--                        Choix multiples à très bon prix en dessous du marché, vendeur très professionnel et sympathique il seront vous orienté je recommande.-->
    <!--                    </div>-->
    <!--                    <div class="author">-->
    <!--                        Virginie R.-->
    <!--                    </div>-->
    <!--                </div>-->
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>

<?php } ?>

<?php include('template-parts/partials/action-section.php'); ?>

<?php get_footer(); ?>