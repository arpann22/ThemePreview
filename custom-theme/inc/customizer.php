<?php 

function theme_customizer_function($wp_customize){

  $wp_customize -> add_panel('landing_panel', array(
'title' => 'Header',
'priority' => 10,
'capability' => 'edit_theme_options',
));
$wp_customize -> add_section('landing_panel_home', array(
'title' => 'Left Main heading ',
'desciption' => __('Main heading Customizer'),
'panel' => 'landing_panel'
));

  $wp_customize->add_setting('landing_panel_title', array(
    'default' => __('Landing Panel heading')
  )
  );
  $wp_customize -> add_control('landing_panel_title', array(
    'label' => 'Left Main heading ',
    'section' => 'landing_panel_home',
    'priority' => 1,
  ));

$wp_customize -> add_setting('right_button', array());
$wp_customize -> add_control('right_button', array(
'label' => 'Button',
'section' => 'landing_panel_home',
'priority' => 2,

));
$wp_customize -> add_panel('footer_panel', array(
  'title' => 'Footer',
  'priority' => 100,
  'capability' => 'edit_theme_options',
  ));
  $wp_customize -> add_section('footer_panel_home', array(
  'title' => 'Footer content ',
  'desciption' => __('Footer Customizer'),
  'panel' => 'footer_panel'
  ));
    $wp_customize->add_setting('footer_panel_title', array(
      'default' => __('Footer pannel')
    )
    );
    $wp_customize -> add_control('footer_panel_title', array(
      'label' => 'Footer content ',
      'section' => 'footer_panel_home',
      'priority' => 3,
    ));
  


}
add_action('customize_register', 'theme_customizer_function');