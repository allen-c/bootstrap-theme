<?php 

function script_styles()
{
	/* Register JS */
	wp_register_script('bootstrap_jquery',get_stylesheet_directory_uri().'/js/bootstrap.js');
	
	/* Register CSS */
	wp_register_style('bootstrap_style',get_stylesheet_directory_uri().'/css/bootstrap.css');
	wp_register_style('bootstrap-theme',get_stylesheet_directory_uri().'/css/bootstrap-theme.css');
	

	/* Enqueue */
	wp_enqueue_script('bootstrap_jquery');
	wp_enqueue_style('bootstrap_style');
	wp_enqueue_style('bootstrap-theme');
	
}
add_action('wp_enqueue_scripts','script_styles');

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'dropdown-menu' => __( 'Dropdown Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

?>