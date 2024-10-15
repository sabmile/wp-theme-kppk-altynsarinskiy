<?php

add_filter( 'use_widgets_block_editor', '__return_false' );
add_filter( 'use_block_editor_for_post_type', '__return_false' );

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_script('jquery');
	wp_enqueue_style( 'reset-style', get_stylesheet_directory_uri() . '/assets/css/reset.css' );
	wp_enqueue_style( 'widget-nav-style', get_stylesheet_directory_uri() . '/assets/css/widget-nav.css', null, microtime() );
	wp_enqueue_script('widget-nav-js', get_stylesheet_directory_uri() . '/assets/js/widget-nav.js' );
	wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/assets/css/style.css', null, microtime() );
});

add_action( 'after_setup_theme', function() {
	register_nav_menus( [
		'header-menu' => 'Меню в шапке',
		'sidebar-menu' => 'Меню в сайдбаре',
		'footer-menu' => 'Меню в подвале',
	]);
});


class Sidebar_Walker_Nav_Menu extends Walker_Nav_Menu {

	function start_lvl( &$output, $depth = 0, $args = NULL ) {
		// depth dependent classes
		$indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
		$display_depth = ( $depth + 1); // because it counts the first submenu as 0
		$classes = array(
			'sidenav-children',
			( $display_depth % 2  ? 'sidenav-closed' : '' ),
		);
		$class_names = implode( ' ', $classes );

		// build html
		$output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
	}

	function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
		global $wp_query;

		$item = $data_object;

		$indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent

		$depth_classes = array(
			'sidenav-item',
		);
	
		$depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

		// passed classes
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

		// build html
		$output .= $indent . '<li class="' . $depth_class_names . ' ' . $class_names . '">';

		// link attributes
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		$attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';

		$item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
			$args->before,
			$attributes,
			$args->link_before,
			apply_filters( 'the_title', $item->title, $item->ID ),
			$args->link_after,
			$args->after
		);

		// build html
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}	
	
}