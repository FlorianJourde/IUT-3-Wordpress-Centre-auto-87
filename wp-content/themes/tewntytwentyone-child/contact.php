<?php
/*
Template Name: Contact
*/

get_header();

?>

<section>
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