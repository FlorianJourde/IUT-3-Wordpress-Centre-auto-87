<div class="cars-cards">

<?php

if (is_archive()) {
    $post_per_page = '9';
} else {
    $post_per_page = '3';
}

$args = array(
    'post_type' => 'voitures',
    'posts_per_page' => $post_per_page
);
$query = new WP_Query( $args );

if ( $query->have_posts() ) :
    while ( $query->have_posts() ) : $query->the_post();
        // Set variables
        $cat_ids                = get_the_ID();
        //        $cat_names_array        = get_the_category($ids);
        $cars_category           = get_the_category( get_the_ID());
        //        $cars_title             = get_field( 'cars_title' );
        //        $cars_main_image        = get_field( 'cars_main_image' );
        //        $cars_link              = get_field( 'cars_title' );
        //        $cars_about             = get_field( 'cars_about' );
        // $cars_category = get_the_terms( the_post()->ID, 'taxonomy' );
        // Output
        ?>



        <a href="<?php echo get_permalink(); ?>" class="cars-card">

            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
            <div class="cars-card-content">
                <h3 class="cars-card-title">
                    <?php echo get_the_title(); ?>
                </h3>
                <p>
                    <!--                        --><?php //echo get_field('description'); ?>
                    <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                </p>
                <div class="cars-card-actions">
                    <button class="button-primary button-red">Voir l'annonce</button>
                    <!--                        <button href="--><?php //get_permalink(); ?><!--" class="button-secondary button-red">Secondary</button>-->
                    <!--                        <button href="--><?php //get_permalink(); ?><!--" class="button-tertiary button-red">tertiary</button>-->
                </div>
            </div>
        </a>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
    <?php twenty_twenty_one_the_posts_navigation(); ?>
<?php endif; ?>

</div>