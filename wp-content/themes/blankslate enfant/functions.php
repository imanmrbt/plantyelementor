<?php

/* Chargement des styles du parent. */
add_action( 'wp_enqueue_scripts', 'wpchild_enqueue_styles' );
function wpchild_enqueue_styles(){
  wp_enqueue_style( 'wpm-blankslate-style', get_template_directory_uri() . '/style.css' );
}


add_filter( 'wp_nav_menu_items','add_admin_link', 10, 2 );

function add_admin_link( $items, $args ) {

    if (is_user_logged_in() && $args->theme_location == 'menu-1') {

        $items .= '<li><a href="'. get_admin_url() .'">Admin</a></li>';

    }

    return $items;

}

?>