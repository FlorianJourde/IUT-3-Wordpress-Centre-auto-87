<div class="cars-cards">

<?php

if (is_archive()) {
    $post_per_page = 12;
} else {
    $post_per_page = 3;
}

global $wp_query;

$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$query = new WP_Query( [
    'post_type' => 'voitures',
    'posts_per_page' => $post_per_page,
    'paged' => $paged,
] );

if ( $query->have_posts() ) :
    while ( $query->have_posts() ) : $query->the_post();
        $cat_ids                = get_the_ID();
        $cars_category          = get_the_category( get_the_ID());
        ?>

        <?php

            if (get_the_post_thumbnail_url(get_the_ID())) {
                $thumbnail = get_the_post_thumbnail_url(get_the_ID());
                $grow = true;
                $description = "Vignette de la voiture";
            } else {
                $thumbnail = get_home_url() . '/wp-content/themes/twentytwentyone-child/assets/images/logo/centre-auto-87-thumbnail.png';
                $grow = false;
                $description = "Miniature de voiture par défaut";
            }

        ?>

        <a href="<?= get_permalink(); ?>" class="cars-card <?= $grow == true ? 'grow' : ''; ?>">

            <img src="<?= $thumbnail; ?>" alt="<?= $description; ?>">

            <div class="tags">

                <?php if (!empty(get_field('kilometres'))) { ?>
                    <p class="tag"><?= number_format(get_field('kilometres'), 0,".", " "); ?>  km</p>
                <?php } ?>

                <?php if (!empty(get_field('carburant'))) { ?>
                    <p class="tag"><?= get_field('carburant'); ?></p>
                <?php } ?>

                <?php if (!empty(get_field('prix'))) { ?>
                    <p class="tag black"><?= number_format(get_field('prix'), 0,".", " "); ?> €</p>
                <?php } ?>

            </div>

            <div class="cars-card-content">
                <h3 class="cars-card-title">
                    <?= get_the_title(); ?>
                </h3>
                <p class="description">
                    <?= wp_trim_words(get_field('description'), 15); ?>
                </p>
                <div class="cars-card-actions">
                    <button class="button-primary button-red">Voir l'annonce</button>
                </div>
            </div>
        </a>


    <?php endwhile; ?>

    <?php wp_reset_postdata(); ?>

<?php endif; ?>

</div>

<?php if (!is_archive()) : ?>

    <div class="buttons-wrapper">
        <a href="/voitures" class="button-primary button-red">Toutes nos voitures</a>
    </div>

<?php endif; ?>

<?php if (is_archive()) : ?>

    <div class="pagination">

        <?php

        echo paginate_links( [
            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
            'total'        => $query->max_num_pages,
            'current'      => max( 1, get_query_var( 'paged' ) ),
            'format'       => '?paged=%#%',
            'show_all'     => false,
            'type'         => 'plain',
            'end_size'     => 2,
            'mid_size'     => 1,
            'prev_next'    => true,
            'prev_text'    => 'Précédent',
            'next_text'    => 'Suivant',
            'add_args'     => false,
            'add_fragment' => '',
        ] );

        ?>

    </div>

<?php endif; ?>
