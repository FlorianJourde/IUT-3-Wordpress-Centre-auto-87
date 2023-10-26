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

<section class="single-container box">
    <div class="wrapper wrapper-wide">
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
                <div class="brand">
                    <h3>Marque</h3>
                    <p><?php echo get_field('marque'); ?></p>
                </div>
                <div class="reference">
                    <h3>Modèle</h3>
                    <p><?php echo get_field('modele'); ?></p>
                </div>
                <div class="color">
                    <h3>Couleur</h3>
                    <p><?php echo get_field('color'); ?></p>
                </div>
            </div>
        </div>
        <div class="single-description">
            <div class="title">
                <h2>Caractéristiques</h2>
            </div>
            <div class="content">
                <div class="brand">
                    <h3>Marque</h3>
                    <p><?php echo get_field('marque'); ?></p>
                </div>
                <div class="reference">
                    <h3>Modèle</h3>
                    <p><?php echo get_field('modele'); ?></p>
                </div>
                <div class="color">
                    <h3>Couleur</h3>
                    <p><?php echo get_field('color'); ?></p>
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

<section class="cars-section-single">
    <div class="wrapper wrapper-wide">
        <h2>Nos dernières voitures</h2>

        <?php get_template_part('template-parts/content/content-portfolio'); ?>

    </div>
</section>


<?php get_footer(); ?>
