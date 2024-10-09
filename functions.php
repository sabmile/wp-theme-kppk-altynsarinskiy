<?php

add_filter( 'use_widgets_block_editor', '__return_false' );
add_filter( 'use_block_editor_for_post_type', '__return_false' );

add_action( 'after_setup_theme', function() {
	register_nav_menu( 'top-menu', 'Header top menu' );
	wp_enqueue_style( 'reset-style', get_stylesheet_directory_uri() . '/assets/css/reset.css' );
	wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), microtime() );
});