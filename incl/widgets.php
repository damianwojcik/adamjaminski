<?php

if (function_exists( 'register_sidebar' )) {

    register_sidebar(array(
        'name' => 'Panel wyszukiwania',
        'id'  => 'search_panel',
        'before_title' => '',
        'after_title' => '',
        'before_widget' => '',
        'after_widget'  => '',
    ));

    register_sidebar(array(
        'name' => 'Sidebar bloga',
        'id'  => 'blog_sidebar',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>',
        'before_widget' => '',
        'after_widget' => '',
    ));

}

?>