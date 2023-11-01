<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

?>

<section class="single-container box offset-top">
    <div class="wrapper">
<!--    <div class="wrapper wrapper-wide">-->
<!--        --><?php //var_dump(get_post()); ?>
        <div class="single-article">
            <div class="left-area">
<!--                <div class="title">-->
<!--                    <h2>Description rapide</h2>-->
<!--                </div>-->

                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <?php foreach (get_field('images') as $item) : ?>
                                        <!-- Slides -->
                                <div class="swiper-slide">
                                    <img src="<?php echo $item; ?>" alt="">
                                </div>
            <!--                            ...-->

            <!--                    <img class="swiper-slide" src="--><?php //echo $item; ?><!--" alt="">-->
                            <?php endforeach; ?>
                        </div>
<!--                        <div class="swiper-pagination"></div>-->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
<!--                        <div class="swiper-scrollbar"></div>-->
                    </div>

                <div class="description">
                    <h2>Description</h2>

                    <div class="content">

                    <!--                <p>--><?php //echo get_the_excerpt(); ?><!--</p>-->
                        <p><?php echo get_field('description'); ?></p>
                    </div>
                </div>
            </div>
            <div class="right-area">

                <div class="row">
                    <img src="<?php echo get_home_url() . "/wp-content/themes/tewntytwentyone-child/assets/images/pictos/shield-picto.png" ?>" alt="">
                    <!--                    <div class="title">-->
                    <div class="details">
                        <h3>Marque</h3>
                        <!--                    </div>-->
                        <p><?php echo get_field('marque'); ?></p>
                    </div>
                </div>

                <div class="row">
                    <img src="<?php echo get_home_url() . "/wp-content/themes/tewntytwentyone-child/assets/images/pictos/barcode-picto.png" ?>" alt="">
                    <!--                    <div class="title">-->
                    <div class="details">
                        <h3>Modèle</h3>
                        <!--                    </div>-->
                        <p><?php echo get_field('modele'); ?></p>
                    </div>
                </div>

                <div class="row">
                    <img src="<?php echo get_home_url() . "/wp-content/themes/tewntytwentyone-child/assets/images/pictos/euro-picto.png" ?>" alt="">
                    <!--                    <div class="title">-->
                    <div class="details">
                        <h3>Prix</h3>
                        <!--                    </div>-->
                        <p><?php echo get_field('prix'); ?> €</p>
                    </div>
                </div>

                <div class="row">
                    <img src="<?php echo get_home_url() . "/wp-content/themes/tewntytwentyone-child/assets/images/pictos/date-picto.png" ?>" alt="">
                    <!--                    <div class="title">-->
                    <div class="details">
                        <h3>Date de l'annonce</h3>
                        <?php echo get_the_date(); ?>
                        <!--                    </div>-->
<!--                        <p>--><?php //echo get_field('prix'); ?><!-- €</p>-->
                    </div>
                </div>

<!--                <div class="seller">-->

                    <a href="#contact" class="row seller">

                        <!--                        <img src="--><?php //echo get_home_url() . "/wp-content/themes/tewntytwentyone-child/assets/images/pictos/date-picto.png" ?><!--" alt="">-->
                        <!--                    <div class="title">-->
                        <div class="details">
                            <h4>Vendu par</h4>
                            <h3><?= get_bloginfo('name'); ?></h3>
                            <!--                    </div>-->
                            <!--                        <p>--><?php //echo get_field('prix'); ?><!-- €</p>-->
                        </div>

                        <img class="website-logo left-website-infos" src="<?= esc_url( wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0] ); ?>" alt="Centre auto 87 logo">

                    </a>

<!--                </div>-->

                <!--                <div class="price">-->
<!--                    <h3>Prix</h3>-->
<!--                    <p>--><?php //echo get_field('prix'); ?><!--</p>-->
<!--                </div>-->

            </div>

            <div class="single-description">
                <div class="title">
                    <h2>Caractéristiques</h2>
                </div>
                <div class="content">


                    <?php if (!empty(get_field('marque'))) { ?>
                        <div class="row">
                            <img src="<?php echo get_home_url() . "/wp-content/themes/tewntytwentyone-child/assets/images/pictos/shield-picto.png" ?>" alt="">
                            <div class="details">
                                <h3>Marque</h3>
                                <p><?php echo get_field('marque'); ?></p>
                            </div>
                        </div>
                    <?php } ?>

                    <?php if (!empty(get_field('modele'))) { ?>
                        <div class="row">
                            <img src="<?php echo get_home_url() . "/wp-content/themes/tewntytwentyone-child/assets/images/pictos/barcode-picto.png" ?>" alt="">
                            <div class="details">
                                <h3>Modèle</h3>
                                <p><?php echo get_field('modele'); ?></p>
                            </div>
                        </div>
                    <?php } ?>

                    <?php if (!empty(get_field('date'))) { ?>
                        <div class="row">
                            <img src="<?php echo get_home_url() . "/wp-content/themes/tewntytwentyone-child/assets/images/pictos/date-picto.png" ?>" alt="">
                            <!--                    <div class="title">-->
                            <div class="details">
                                <h3>Mise en circulation</h3>
                                <p><?php echo get_field('date'); ?></p>
                            </div>
                        </div>
                    <?php } ?>

                    <?php if (!empty(get_field('kilometres'))) { ?>
                        <div class="row">
                            <img src="<?php echo get_home_url() . "/wp-content/themes/tewntytwentyone-child/assets/images/pictos/speed-picto.png" ?>" alt="">
                            <div class="details">
                                <h3>Kilomètres</h3>
                                <p><?php echo get_field('kilometres'); ?> km</p>
                            </div>
                        </div>
                    <?php } ?>

                    <?php if (!empty(get_field('type'))) { ?>
                        <div class="row">
                            <img src="<?php echo get_home_url() . "/wp-content/themes/tewntytwentyone-child/assets/images/pictos/car-model-picto.png" ?>" alt="">
                            <div class="details">
                                <h3>Type</h3>
                                <p><?php echo get_field('type'); ?></p>
                            </div>
                        </div>
                    <?php } ?>

                    <?php if (!empty(get_field('vitesse'))) { ?>
                        <div class="row">
                            <img src="<?php echo get_home_url() . "/wp-content/themes/tewntytwentyone-child/assets/images/pictos/gear-picto.png" ?>" alt="">
                            <div class="details">
                                <h3>Boîte de vitesse</h3>
                                <p><?php echo get_field('vitesse'); ?></p>
                            </div>
                        </div>
                    <?php } ?>

                    <?php if ( get_field('couleur') != 'Non renseigné') { ?>
                        <div class="row">
                            <img src="<?php echo get_home_url() . "/wp-content/themes/tewntytwentyone-child/assets/images/pictos/color-palette-picto.png" ?>" alt="">
                            <div class="details">
                                <h3>Couleur</h3>

                                <?php

                                $color = get_field('couleur');

                                switch (get_field('couleur')) {
                                    case 'Blanc':
                                        $color = '#ffffff';
                                        break;
                                    case 'Noir':
                                        $color = '#000000';
                                        break;
                                    case 'Gris clair':
                                        $color = '#d0d0d0';
                                        break;
                                    case 'Gris foncé':
                                        $color = '#6a6a6a';
                                        break;
                                    case 'Bleu':
                                        $color = '#52a5ff';
                                        break;
                                    case 'Rouge':
                                        $color = '#d31717';
                                        break;
                                    case 'Vert':
                                        $color = '#6fa80f';
                                        break;
                                    case 'Marron':
                                        $color = '#6c2f09';
                                        break;
                                    case 'Orange':
                                        $color = '#d85d11';
                                        break;
                                    case 'Beige':
                                        $color = '#e0dba6';
                                        break;
                                    case 'Violet':
                                        $color = '#823096';
                                        break;
                                    case 'Jaune':
                                        $color = '#eee636';
                                        break;
                                }

                                ?>

                                <p><span class="color-preview" style="background-color: <?php echo $color ?>;"></span> <?php echo get_field('couleur'); ?></p>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
<!--        <div class="single-article-technical">-->
<!--            <div class="brand">-->
<!--                <h3>Marque</h3>-->
<!--                <p>--><?php //echo get_field('marque'); ?><!--</p>-->
<!--            </div>-->
<!--            <div class="reference">-->
<!--                <h3>Modèle</h3>-->
<!--                <p>--><?php //echo get_field('modele'); ?><!--</p>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="single-article-images">-->
<!--        </div>-->

    </div>
</section>
<!--<section class="single-container-technical">-->
<!--    <div class="wrapper">-->
<!--        <h2>Descriptif technique</h2>-->
<!--    </div>-->
<!--</section>-->
<!--<section class="single-container-images">-->
<!--    <div class="wrapper">-->
<!--        <h2>Photos</h2>-->
<!--    </div>-->
<!--</section>-->

<section class="cars-section">
    <div class="wrapper">
        <h2>Nos dernières voitures</h2>

        <?php get_template_part('template-parts/content/content-portfolio'); ?>

    </div>
</section>

<?php include('template-parts/partials/contact.php'); ?>

<?php get_footer(); ?>
