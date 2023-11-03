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
        <div class="single-article">

            <div class="left-area">

                <?php if (get_field('images')) { ?>
                    <div class="swiper single">
                        <div class="swiper-wrapper">
                            <?php foreach (get_field('images') as $item) : ?>
                                <div class="swiper-slide">
                                    <img src="<?php echo $item; ?>" alt="">
                                </div>

                            <?php endforeach; ?>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                <?php } else {
                            if (get_the_post_thumbnail_url(get_the_ID())) {
                                $thumbnail = get_the_post_thumbnail_url(get_the_ID());
                            } else {
                                $thumbnail = get_home_url() . '/wp-content/themes/tewntytwentyone-child/assets/images/logo/centre-auto-87-thumbnail.png';
                            }
                ?>

                    <div class="single-image">
                        <img src="<?php echo $thumbnail ?>" alt="">
                    </div>

                <?php } ?>

                <div class="description">
                    <h2>Description</h2>
                    <div class="content">
                        <p><?php echo get_field('description'); ?></p>
                    </div>
                </div>
            </div>

            <div class="right-area">

<!--                --><?php //if (get_field('marque') != 'Non-renseigné') {?>
                    <div class="row">
<!--                        <img src="--><?php //echo get_home_url() . "/wp-content/themes/tewntytwentyone-child/assets/images/pictos/shield-picto.png" ?><!--" alt="">-->

                        <?php

                            $replace = [
                                'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'ç' => 'c',
                                'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e',
                                'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i',
                                'ñ' => 'n',
                                'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'o',
                                'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ü' => 'u',
                                'ý' => 'y', 'ÿ' => 'y',
                            ];

                            $brand = strtr(get_field('marque'), $replace);
//                        }
                        ?>

                        <?php if (get_field('marque') != 'Non-renseigné') { ?>

                            <img class="brand icon" src="<?php echo get_home_url() . '/wp-content/themes/tewntytwentyone-child/assets/images/brands/' . $brand . '-automobile-logo.png'; ?>" alt="<?php echo get_field('marque') ?> automobile logo">

                        <?php } else { ?>

                            <img src="<?php echo get_home_url() . "/wp-content/themes/tewntytwentyone-child/assets/images/pictos/shield-picto.png" ?>" alt="">

                        <?php } ?>

                        <div class="details">
                            <h3>Marque</h3>
                            <p><?php echo get_field('marque'); ?></p>
                        </div>
                    </div>
<!--                --><?php //} ?>

                <?php if (get_field('modele')) { ?>
                    <div class="row">
                        <img src="<?php echo get_home_url() . "/wp-content/themes/tewntytwentyone-child/assets/images/pictos/barcode-picto.png" ?>" alt="">
                        <div class="details">
                            <h3>Modèle</h3>
                            <p><?php echo get_field('modele'); ?></p>
                        </div>
                    </div>
                <?php } ?>

                <?php if (get_field('prix')) { ?>
                    <div class="row">
                        <img src="<?php echo get_home_url() . "/wp-content/themes/tewntytwentyone-child/assets/images/pictos/euro-picto.png" ?>" alt="">
                        <div class="details">
                            <h3>Prix</h3>
                            <p><?php echo get_field('prix'); ?> €</p>
                        </div>
                    </div>
                <?php } ?>

                <?php if (get_the_date()) { ?>
                    <div class="row">
                        <img src="<?php echo get_home_url() . "/wp-content/themes/tewntytwentyone-child/assets/images/pictos/date-picto.png" ?>" alt="">
                        <div class="details">
                            <h3>Date de l'annonce</h3>
                            <?php echo get_the_date(); ?>
                        </div>
                    </div>
                <?php } ?>

                <a href="/contact" class="row seller">
                    <div class="details">
                        <h4>Vendu par</h4>
                        <h3><?= get_bloginfo('name'); ?></h3>
                    </div>
                    <img class="website-logo left-website-infos" src="<?= esc_url( wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0] ); ?>" alt="Centre auto 87 logo">
                </a>

            </div>

            <div class="single-description">
                <div class="title">
                    <h2>Caractéristiques</h2>
                </div>
                <div class="content">

                    <div class="row">
                        <?php if (get_field('marque') != 'Non-renseigné') { ?>
                            <img src="<?php echo get_home_url() . '/wp-content/themes/tewntytwentyone-child/assets/images/brands/' . $brand . '-automobile-logo.png'; ?>" alt="<?php echo get_field('marque') ?> automobile logo">
                        <?php } else { ?>
                        <img src="<?php echo get_home_url() . "/wp-content/themes/tewntytwentyone-child/assets/images/pictos/shield-picto.png" ?>" alt="Pictogramme bouclier">
                        <?php } ?>

                        <div class="details">
                            <h3>Marque</h3>
                            <p><?php echo get_field('marque'); ?></p>
                        </div>
                    </div>

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

                    <?php if (!empty(get_field('carburant'))) { ?>
                        <div class="row">
                            <img src="<?php echo get_home_url() . "/wp-content/themes/tewntytwentyone-child/assets/images/pictos/fuel-picto.png" ?>" alt="">
                            <div class="details">
                                <h3>Carburant</h3>
                                <p><?php echo get_field('carburant'); ?></p>
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


<?php include('template-parts/partials/action-section.php'); ?>

<?php get_footer(); ?>
