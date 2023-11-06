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
        <a href="mailto:recup.auto87@outlook.fr"><img src="<?php echo get_home_url() . '/wp-content/themes/tewntytwentyone-child/assets/images/pictos/email-picto.png'; ?>" alt="Téléphone"> recup.auto87@outlook.fr</a>
        <a href="tel:+33625326065"><img src="<?php echo get_home_url() . '/wp-content/themes/tewntytwentyone-child/assets/images/pictos/phone-picto.png'; ?>" alt="Email">06 25 32 60 65</a>
    </div>
</section>

<header>
    <div class="wrapper">
        <a href="<?= get_site_url(); ?>" class="website-infos">
            <img class="website-logo left-website-infos" src="<?= esc_url( wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0] ); ?>" alt="Centre auto 87 logo">
            <div class="right-website-infos">
                <h2 class="website-title"><?= get_bloginfo('name'); ?></h2>
<!--                <h2 class="website-title">--><?php //get_template_part( 'template-parts/header/site-branding' ); ?><!--</h2>-->
                <p class="website-baseline"><?= get_bloginfo('description'); ?></p>
<!--                <p class="website-baseline">--><?php //get_template_part( 'template-parts/header/site-nav' ); ?><!--</p>-->
            </div>
        </a>
<!--        <ul class="menu">-->
        <?php wp_nav_menu(); ?>
<!--        </ul>-->
    </div>
</header>

<!--<header id="masthead" class="<?php /*echo esc_attr( $wrapper_classes ); */?>">

	<?php /*get_template_part( 'template-parts/header/site-branding' ); */?>
	<?php /*get_template_part( 'template-parts/header/site-nav' ); */?>

</header>-->
