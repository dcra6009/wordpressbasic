<?php
/*  Theme settings */
if ( ! function_exists( 'basic_setup' ) ) :
	function basic_setup() {


		register_nav_menus( array(
			'top_menu'    => __( 'Basic Themes - Main Menu', 'a-basic-theme' ),
			'bottom_menu' => __( 'Basic Themes - Footer Menu', 'a-basic-theme' )
		) );
	}
endif;
add_action( 'after_setup_theme', 'basic_setup' );

 /*  Register widget area */

 if ( ! function_exists( 'basic_widgets_init' ) ) :
 	function basic_widgets_init() {
 		register_sidebar( array(
 			'name'          => __( 'Sidebar', 'a-basic-theme' ),
 			'id'            => 'sidebar',
 			'description'   => __( 'Add widgets here to appear in your sidebar.', 'a-basic-theme' ),
 			'before_widget' => '<ul>',
 			'after_widget'  => '</ul>',
 			'before_title'  => '<h3 class="wtitle">',
 			'after_title'   => '</h3>',
 		) );

 	}
 endif;
 add_action( 'widgets_init', 'basic_widgets_init' );

?>
