<?php

// galleries post type
function galleries_post_type() {

    $labels = array(
        'name'                  => _x( 'Galerie', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Galeria', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Galerie', 'text_domain' ),
        'name_admin_bar'        => __( 'Galerie', 'text_domain' ),
        'archives'              => __( 'Archiwum Galerii', 'text_domain' ),
        'parent_item_colon'     => __( 'Rodzic Galerii:', 'text_domain' ),
        'all_items'             => __( 'Wszystkie Galerie', 'text_domain' ),
        'add_new_item'          => __( 'Dodaj nową Galerię', 'text_domain' ),
        'add_new'               => __( 'Dodaj nową', 'text_domain' ),
        'new_item'              => __( 'Nowe Galerie', 'text_domain' ),
        'edit_item'             => __( 'Edytuj Galerię', 'text_domain' ),
        'update_item'           => __( 'Zaaktualizuj Galerię', 'text_domain' ),
        'view_item'             => __( 'Zobacz Galerię', 'text_domain' ),
        'search_items'          => __( 'Szukaj Galerii', 'text_domain' ),
        'not_found'             => __( 'Nie znaleziono', 'text_domain' ),
        'not_found_in_trash'    => __( 'Nie znaleziono w koszu', 'text_domain' ),
        'featured_image'        => __( 'Wyróżniony obrazek', 'text_domain' ),
        'set_featured_image'    => __( 'Ustaw wyróżniony obrazek', 'text_domain' ),
        'remove_featured_image' => __( 'Usuń wyróżniony obrazek', 'text_domain' ),
        'use_featured_image'    => __( 'Użyj jako wyróżniony obrazek', 'text_domain' ),
        'insert_into_item'      => __( 'Wstaw do Galerii', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Wgrano do Galerii', 'text_domain' ),
        'items_list'            => __( 'Lista Galerii', 'text_domain' ),
        'items_list_navigation' => __( 'Lista Galerii', 'text_domain' ),
        'filter_items_list'     => __( 'Filtruj Galerie', 'text_domain' ),
    );

    $args = array(
        'label'                 => __( 'Galerie', 'text_domain' ),
        'description'           => __( 'Post type used for site galleries', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'thumbnail' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-format-gallery',
        'show_in_admin_bar'     => false,
        'show_in_nav_menus'     => false,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );

    register_post_type( 'galeria', $args );

}

add_action( 'init', 'galleries_post_type', 0 );

?>