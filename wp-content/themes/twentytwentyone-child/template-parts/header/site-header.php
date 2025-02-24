<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= ( true === get_theme_mod( 'display_title_and_tagline', true ) ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
?>

<section class="upper-header">
    <div class="wrapper">
        <p>
                <img src="<?= get_home_url() . '/wp-content/themes/twentytwentyone-child/assets/images/pictos/email-picto.png'; ?>" alt="Téléphone pictogramme">
            <a href="mailto:contact@centreauto87.fr" target="_blanks">
                contact@centreauto87.fr
            </a>
        </p>
        <p>
            <img src="<?= get_home_url() . '/wp-content/themes/twentytwentyone-child/assets/images/pictos/phone-picto.png'; ?>" alt="Email pictogramme"><a href="tel:+33645450198">06 45 45 01 98</a> • <a href="tel:+33667427139">06 67 42 71 39</a>
        </p>
    </div>
</section>

<header>
    <div class="wrapper">
        <div class="menu-wrapper">

            <a href="<?= get_site_url(); ?>" class="website-infos">
                <img class="website-logo left-website-infos" src="<?= esc_url( wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0] ); ?>" alt="Centre auto 87 logo">
                <div class="right-website-infos">
                    <h2 class="website-title"><?= get_bloginfo('name'); ?></h2>
                    <p class="website-baseline"><?= get_bloginfo('description'); ?></p>
                </div>
            </a>

            <div class="menu-container">
                <?php wp_nav_menu(); ?>
            </div>

<!--            <div class="mobile-only menu-burger-container">-->
                <button class="mobile-only menu-burger">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
<!--            </div>-->

        </div>
    </div>
</header>
