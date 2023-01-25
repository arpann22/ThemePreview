<?php
//bootstrap css
// =========================================================================
//wp_enqueue_style('bootstrap-css',get_template_directory(). '/css/bootstrap.css');
function wpdocs_theme_name_scripts() {
	wp_enqueue_style( 'arpan-style', get_stylesheet_uri() );
// 	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
 
	wp_enqueue_style( 'arpan-style', get_stylesheet_uri() );
// 	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
 }
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
 add_theme_support('menus');
register_nav_menus(
  array(
    'primary' => 'Primary Menu',
    'extra' => 'Extra Menu'
  )
);
 function themeslug_customize_register( $wp_customize ) {
      // Do stuff with $wp_customize, the WP_Customize_Manager object.
    }
    
    //WIDGETS---------------

 /**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function custom_theme_register_sidebars() {
	
  register_sidebar( array(
   'name'          => esc_html__( 'Footer Section One', 'custom_theme' ),
   'id'            => 'footer-section-one',
   'description'   => esc_html__( 'Widgets added here would appear inside the first section of the footer', 'nd_dosth' ),
   'before_widget' => '',
   'after_widget'  => '',
   'before_title'  => '',
   'after_title'   => '',
   ) );
   
   register_sidebar( array(
   'name'          => esc_html__( 'Footer Section Two', 'custom_theme' ),
   'id'            => 'footer-section-two',
   'description'   => esc_html__( 'Widgets added here would appear inside the second section of the footer', 'nd_dosth' ),
   'before_widget' => '',
   'after_widget'  => '',
   'before_title'  => '',
   'after_title'   => '',
 ) );
}
add_action( 'widgets_init', 'custom_theme_register_sidebars' );


add_theme_support( 'custom-logo' );

require_once get_template_directory() . '/inc/customizer.php';


