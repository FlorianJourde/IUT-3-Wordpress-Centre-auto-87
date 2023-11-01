<div class="cars-cards">

<?php

if (is_archive()) {
    $post_per_page = 6;
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

        <a href="<?php echo get_permalink(); ?>" class="cars-card">

            <?php

                if (get_the_post_thumbnail_url(get_the_ID())) {
                    $thumbnail = get_the_post_thumbnail_url(get_the_ID());
                } else {
                    $thumbnail = get_home_url() . '/wp-content/themes/tewntytwentyone-child/assets/images/logo/centre-auto-87-thumbnail.png';
                }

            ?>

            <img src="<?php echo $thumbnail; ?>" alt="">

            <div class="cars-card-content">
                <h3 class="cars-card-title">
                    <?php echo get_the_title(); ?>
                </h3>
                <p>
                    <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
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
