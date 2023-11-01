<?php
/*
Template Name: Contact
*/

get_header();

?>

<section class="contact-info-section">
    <div class="wrapper">
        <div class="contact-infos">
            <a class="contact-info" href="mailto:recup.auto87@outlook.fr">
                <img src="<?php echo get_home_url() . '/wp-content/themes/tewntytwentyone-child/assets/images/pictos/email-picto.png'; ?>" alt="Téléphone"> recup.auto87@outlook.fr
            </a>
            <a class="contact-info" href="tel:+33625326065">
                <img src="<?php echo get_home_url() . '/wp-content/themes/tewntytwentyone-child/assets/images/pictos/phone-picto.png'; ?>" alt="Email">
                06 25 32 60 65
            </a>
            <a class="contact-info" href="https://maps.app.goo.gl/QmA71HxH1XmVj5jW8" target="_blank">
                <img src="<?php echo get_home_url() . '/wp-content/themes/tewntytwentyone-child/assets/images/pictos/location-picto.png'; ?>" alt="Adresse">
                28 Rte de Poitiers <br> 87270 Couzeix
            </a>
        </div>
    </div>
</section>

<section class="contact-form-section">
    <div class="wrapper">
<!--        <h2>Page contact</h2>-->
<!--        [wpforms id="120" title="false"]-->
<!--        --><?php //[wpforms id="120" title="false"] ?>
        <?php echo do_shortcode( '[wpforms id="120" title="false"]' ); ?>
    </div>
</section>

<?php

get_footer();

?>