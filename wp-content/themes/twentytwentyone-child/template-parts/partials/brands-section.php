<div class="text-with-button">
    <h2 class="<?= is_front_page() ? "title-decoration" : ""?>">Nos marques</h2>

    <?php

    $parts = parse_url($_SERVER['REQUEST_URI']);
    if ($parts['query']) {

        ?>

        <div class="buttons-wrapper">
            <a class="button-primary button-red" href="<?= get_post_type_archive_link( 'voitures' ); ?>">Réinitialiser</a>
        </div>

    <?php } ?>

</div>

<div class="brands">

    <?php

    $query = $wpdb->prepare("SELECT * FROM `wp_postmeta` INNER JOIN `wp_posts` WHERE wp_posts.id = wp_postmeta.post_id AND wp_posts.post_status = 'publish' AND `meta_key` = 'marque'");
    $results = $wpdb->get_results($query);
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

            $resultsArray[] = strtr($result->meta_value, $replace);
        }
    }

    foreach ($resultsArray as $brand) {
        if ($brand != 'Non-renseigne') {

            ?>

            <a href="<?= get_home_url() . '/voitures?marque=' . strtolower($brand); ?>">
                <img class="brand" src="<?= get_home_url() . '/wp-content/themes/twentytwentyone-child/assets/images/brands/' . strtolower($brand) . '-automobile-logo.png'; ?>" alt="<?= $brand ?> automobile logo">
            </a>

        <?php }
    } ?>

</div>