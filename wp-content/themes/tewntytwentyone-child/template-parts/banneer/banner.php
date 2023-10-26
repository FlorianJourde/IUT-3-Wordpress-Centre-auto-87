<section class="banner <?php echo !(is_single()) ? "" : "banner-small" ?> ">
    <div class="wrapper">
        <?php if (is_archive()) : ?>
            <h1>Nos voitures</h1>
        <?php else : ?>
            <h1><?php echo get_the_title(); ?></h1>
        <?php endif; ?>
    </div>
</section>
