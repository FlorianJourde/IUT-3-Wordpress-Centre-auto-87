<?php
/*
Template Name: Contact
*/

get_header();

?>

<section class="contact-info-section">
    <div class="wrapper">
        <div class="contact-infos">
            <a class="contact-info" href="mailto:contact@centreauto87.fr" target="_blank">
                <img src="<?= get_home_url() . '/wp-content/themes/twentytwentyone-child/assets/images/pictos/email-picto.png'; ?>" alt="Téléphone">contact@centreauto87.fr
            </a>
            <div class="contact-info">
                <img src="<?= get_home_url() . '/wp-content/themes/twentytwentyone-child/assets/images/pictos/phone-picto.png'; ?>" alt="Email">
                <a href="tel:+33645450198">06 45 45 01 98</a>
                <a href="tel:+33667427139">06 67 42 71 39</a>
            </div>
            <a class="contact-info" href="https://maps.app.goo.gl/QmA71HxH1XmVj5jW8" target="_blank">
                <img src="<?= get_home_url() . '/wp-content/themes/twentytwentyone-child/assets/images/pictos/location-picto.png'; ?>" alt="Adresse">
                28 Route de Poitiers <br> 87270 Couzeix
            </a>
        </div>
    </div>
</section>

<section class="contact-form-section">
    <div class="wrapper">
        <h2 class="title-decoration">Besoin d'un renseignement ? Écrivez-nous !</h2>
        <div class="form-wrapper">
            <div class="left-area"></div>
            <div class="right-area">
                <?= do_shortcode( '[wpforms id="120" title="false"]' ); ?>
            </div>
        </div>
    </div>
</section>

<section id="contact-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2777.164549086586!2d1.2365808!3d45.888022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47fecb89c0e59385%3A0x605d55efbe83e143!2sCentre%20auto%2087!5e0!3m2!1sfr!2sfr!4v1698853379584!5m2!1sfr!2sfr" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<?php

get_footer();

?>