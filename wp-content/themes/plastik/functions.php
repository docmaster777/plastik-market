<?php
/**
* Подключени scripts and styles.
*/

add_action( 'wp_enqueue_scripts', 'test_scripts' );

function test_scripts() {
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );
}

?>