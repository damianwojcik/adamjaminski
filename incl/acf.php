<?php

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'	=> 'Opcje strony',
        'menu_title'	=> 'Opcje strony',
        'menu_slug'		=> 'page-options',
        'capability'	=> 'edit_posts',
        'parent_slug'	=> '',
        'icon_url'		=> 'dashicons-edit',
        'redirect'		=> true
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Opcje strony',
        'menu_title'	=> 'Opcje strony',
        'parent_slug'	=> 'page-options',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Social Media',
        'menu_title'	=> 'Social Media',
        'parent_slug'	=> 'page-options',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Social Media',
        'menu_title'	=> 'Social Media',
        'parent_slug'	=> 'page-options',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Nadchodzące biegi',
        'menu_title'	=> 'Nadchodzące biegi',
        'parent_slug'	=> 'page-options',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Partnerzy',
        'menu_title'	=> 'Partnerzy',
        'parent_slug'	=> 'page-options',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Cytaty',
        'menu_title'	=> 'Cytaty',
        'parent_slug'	=> 'page-options',
    ));

}

?>