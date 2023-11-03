<div class="text-with-button">
    <h2 class="<?= is_front_page() ? "title-decoration" : ""?>">Nos marques</h2>

    <?php

    $parts = parse_url($_SERVER['REQUEST_URI']);
    if ($parts['query']) {

        ?>

        <div class="buttons-wrapper">
            <a class="button-primary button-red" href="<?php echo get_post_type_archive_link( 'voitures' ); ?>">Réinitialiser les filtres</a>
        </div>

    <?php } ?>

</div>

<div class="brands">

    <?php

//    $wpdb =;
//    $query = $wpdb->prepare("SELECT * FROM `wp_postmeta` WHERE `meta_key` = 'marque'");
    $query = $wpdb->prepare("SELECT * FROM `wp_postmeta` INNER JOIN `wp_posts` WHERE wp_posts.id = wp_postmeta.post_id AND wp_posts.post_status = 'publish' AND `meta_key` = 'marque'");
    $results = $wpdb->get_results($query);
//    $brands
//    var_dump($results);
    $resultsArray = [];

    foreach ($results as $result) {
        if (!in_array($result->meta_value,$resultsArray)) {

            $replace = [
                'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'ç' => 'c',
                'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e',
                'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i',
                'ñ' => 'n',
                'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'o',
                'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ü' => 'u',
                'ý' => 'y', 'ÿ' => 'y',
            ];

//            $unaccentedBrand = strtr($result->meta_value, $replace);

//            var_dump($unaccentedBrand);

            $resultsArray[] = strtr($result->meta_value, $replace);
//            $resultsArray[] = $unaccentedBrands = strtr($result->meta_value, $replace);
        }
    }

//    $unaccentedBrands = [];
//    foreach ($resultsArray as $resultWithAccent) {
//        $replace = [
//            'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'ç' => 'c',
//            'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e',
//            'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i',
//            'ñ' => 'n',
//            'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'o',
//            'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ü' => 'u',
//            'ý' => 'y', 'ÿ' => 'y',
//        ];
//
//        $unaccentedBrands[] = strtr($resultWithAccent, $replace);
////        var_dump($unaccentedBrands);
//    }

//    $unaccentedBrands
//    $resultsArray[] = $unaccentedBrands = strtr($result->meta_value, $replace);



    //    $groups = acf_get_field_groups(array('post_type' => 'voitures'));
//    $fields = acf_get_fields($groups[0]['ID']);
//    $brands = $fields[0]['choices'];

    foreach ($resultsArray as $brand) {
        if ($brand != 'Non-renseigne') {

            ?>

            <a href="<?php echo get_home_url() . '/voitures?marque=' . $brand; ?>">
                <img class="brand" src="<?php echo get_home_url() . '/wp-content/themes/tewntytwentyone-child/assets/images/brands/' . $brand . '-automobile-logo.png'; ?>" alt="<?php echo $brand ?> automobile logo">
            </a>

        <?php }
    } ?>

</div>