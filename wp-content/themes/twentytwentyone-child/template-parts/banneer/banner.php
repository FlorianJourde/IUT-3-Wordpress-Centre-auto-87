    <?php

    $is_wide = '';
    global $template;

    if (is_single() || is_archive() || basename($template) === 'legals.php' || basename($template) === 'contact.php' || basename($template) === '404.php') {
        $is_wide = 'wide';
    }

    $is_homepage = '';
    if (is_front_page()) {
        $is_homepage = 'homepage';
    }

    ?>

<section class="banner <?= is_single() ? "banner-single" : "" ?> <?= $is_wide; ?> <?= $is_homepage; ?>">

    <?php

    if (is_archive()) {
        $banner_img = get_home_url() . "/wp-content/themes/twentytwentyone-child/assets/images/photo/car-interior-5.jpg";
    } elseif (get_the_post_thumbnail_url()) {
        $banner_img = get_the_post_thumbnail_url(get_the_ID());
    } else {
        $banner_img = get_home_url() . "/wp-content/themes/twentytwentyone-child/assets/images/photo/forest-road-crop.jpg";
    }

    ?>

    <div class="banner-image"  style="background-image: url(<?= $banner_img; ?>)"></div>

    <div class="wrapper">
        <?php if (is_archive()) : ?>
            <h1>Nos voitures</h1>
        <?php elseif (is_front_page()) : ?>
            <h1><?= get_bloginfo('name'); ?></h1>
            <h2><?= get_bloginfo('description'); ?></h2>
        <?php elseif (is_404()) : ?>
            <h1>Page introuvable</h1>
        <?php else : ?>
            <h1><?= get_the_title(); ?></h1>
        <?php endif; ?>
    </div>
</section>
