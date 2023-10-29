<?php

add_action( 'wp_enqueue_scripts', 'custom_styles', PHP_INT_MAX);
function custom_styles() {
    wp_enqueue_style('main-style', get_stylesheet_directory_uri() . '/style.css', [],'1.0.0');
}

add_action( 'wp_enqueue_scripts', 'custom_scripts' );
function custom_scripts() {
    wp_enqueue_script('slider-script', get_stylesheet_directory_uri() . '/assets/js/_slider.js');
}

add_filter('upload_mimes', 'support_mime_types');
function support_mime_types($mimes) {
    $mimes['svg'] = 'image/svg xml';
    return $mimes;
}

add_action( 'init', 'custom_post_type', 0 );
function custom_post_type() {
    $labels = array(
        'name'                => _x( 'Voitures', 'Post Type General Name'),
        'singular_name'       => _x( 'Voiture', 'Post Type Singular Name'),
        'menu_name'           => __( 'Voitures'),
        'all_items'           => __( 'Toutes les voitures'),
        'view_item'           => __( 'Voir les voitures'),
        'add_new_item'        => __( 'Ajouter une nouvelle voiture'),
        'add_new'             => __( 'Ajouter'),
        'edit_item'           => __( 'Editer la voiture'),
        'update_item'         => __( 'Modifier la voiture'),
        'search_items'        => __( 'Rechercher une voiture'),
        'not_found'           => __( 'Non trouvée'),
        'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
    );

    $args = array(
        'label'               => __( 'Voitures'),
        'description'         => __( 'Tous sur voitures'),
        'labels'              => $labels,
        'menu_icon'           => 'dashicons-car',
        'supports'            => array( 'title', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'show_in_rest'        => true,
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'			  => array( 'slug' => 'voitures'),
    );

    register_post_type( 'voitures', $args );
}

add_action('pre_get_posts', 'my_pre_get_posts');
function my_pre_get_posts( $query ) {
    if( is_admin() ) {
        return $query;
    }

    if( isset($query->query_vars['post_type']) && $query->query_vars['post_type'] == 'voitures' ) {
        if( isset($_GET['marque']) ) {
            $query->set('meta_key', 'marque');
            $query->set('meta_value', $_GET['marque']);
        }
    }

    return $query;
}

//
//add_action('pre_get_posts', 'my_pre_get_posts');
//function my_pre_get_posts( $query ) {
//
//    // do not modify queries in the admin
//    if( is_admin() ) {
//        return $query;
//    }
//
//    // only modify queries for 'event' post type
////    if( isset($query->query_vars['post_type']) ) {
////    if( isset($query->query_vars['post_type']) && $query->query_vars['post_type'] == 'marque' ) {
//
//        var_dump(get_field('marque'));
//        // allow the url to alter the query
////        if( isset($_GET['city']) ) {
////            $query->set('meta_key', 'city');
////            $query->set('meta_value', $_GET['city']);
//////        }
////    }
//
//    return $query;
//}
//
//add_filter('query_vars', 'custom_query_vars');
//function custom_query_vars ($params) {
//    $params[] = 'marque';
//    var_dump($params);
//    return $params;
//}

//add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );
//function mytheme_custom_excerpt_length( $length ) {
//    return 20;
//}
