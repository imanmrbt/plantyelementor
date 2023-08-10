<?php

/* Chargement des styles du parent. */
add_action( 'wp_enqueue_scripts', 'wpchild_enqueue_styles' );
function wpchild_enqueue_styles(){
  wp_enqueue_style( 'wpm-blankslate-style', get_template_directory_uri() . '/style.css' );
}


function hide_admin_link() {
    if ( ! is_user_logged_in() ) {
        ?>
        <style type="text/css">
            #menu-item-1993 { display: none; }
        </style>
        <?php

    }
}
add_action( 'wp_head', 'hide_admin_link' );
?>