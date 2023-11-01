<section class="banner <?php echo is_single() ? "banner-single" : "" ?> <?php echo is_front_page() ? "banner-wide" : "" ?>">

    <?php

    if (get_the_post_thumbnail_url()) {
        $banner_img = get_the_post_thumbnail_url(get_the_ID());
    } else {
        $banner_img = get_home_url() . "/wp-content/themes/tewntytwentyone-child/assets/images/banner/forest-road-crop.jpg";
    }

    ?>

    <div class="banner-image"  style="background-image: url(<?php echo $banner_img; ?>)"></div>

    <div class="wrapper">
        <?php if (is_archive()) : ?>
            <h1>Nos voitures</h1>
        <?php elseif (is_front_page()) : ?>
            <h1><?= get_bloginfo('name'); ?></h1>
            <h2><?= get_bloginfo('description'); ?></h2>
        <?php else : ?>
            <h1><?php echo get_the_title(); ?></h1>
        <?php endif; ?>
    </div>
</section>
