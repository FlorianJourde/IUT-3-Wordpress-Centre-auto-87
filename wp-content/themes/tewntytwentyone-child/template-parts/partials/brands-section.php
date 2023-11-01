<h2>Nos marques</h2>

<div class="brands">

    <?php

    $groups = acf_get_field_groups(array('post_type' => 'voitures'));
    $fields = acf_get_fields($groups[0]['ID']);
    $brands = $fields[0]['choices'];

    foreach ($brands as $brand) {
        if ($brand != 'Non-renseigné') {

            ?>

            <a href="<?php echo get_home_url() . '/voitures?marque=' . $brand; ?>">

                <img class="brand" src="<?php echo get_home_url() . '/wp-content/themes/tewntytwentyone-child/assets/images/brands/' . $brand . '-automobile-logo.png'; ?>" alt="<?php echo $brand ?> automobile logo">
            </a>

        <?php }
    } ?>

</div>