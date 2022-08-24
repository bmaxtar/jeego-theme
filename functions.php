<?php
// Including stylesheets and script files
function load_scripts()
{
  wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array('jquery'), '4.3.1', true);
  wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '4.3.1', 'all');
  wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'load_scripts');

// Main config function
function jeego_config()
{
  // Registering Menu
  register_nav_menus(
    array(
      'my_main_menu' => 'Main Menu',
      'footer_menu' => 'Footer_Menu'
    )
  );
  $args = array(
    'height' => 225,
    'width' => 1920
  );
  add_theme_support('custom-header', $args);
  add_theme_support('post-thumbnails');
  add_theme_support('post-formats', array('video', 'image'));
}
add_action('after_setup_theme', 'jeego_config', 0);

// Registering Sidebars
add_action('widgets_init', 'jeego_sidebars');
function jeego_sidebars()
{
  register_sidebar(
    array(
      'name' => 'Home Page Sidebar',
      'id' => 'sidebar-001',
      'description' => "Ceci est le Sidebar de la page d'accueil",
      'before_widget' => '<div class="widget-wrapper">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="widget-title">',
      'after_title' => '</h2>'
    )
  );
  register_sidebar(
    array(
      'name' => 'Blog Sidebar',
      'id' => 'sidebar-002',
      'description' => 'Ceci est le Sidebar de la page blog',
      'before_widget' => '<div class="widget-wrapper">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="widget-title">',
      'after_title' => '</h2>'
    )
  );
  register_sidebar(
    array(
      'name' => 'Service 001',
      'id' => 'services-001',
      'description' => 'Premier serivce',
      'before_widget' => '<div class="widget-wrapper">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="widget-title">',
      'after_title' => '</h2>'
    )
  );
  register_sidebar(
    array(
      'name' => 'Service 002',
      'id' => 'services-002',
      'description' => 'Deuxieme service',
      'before_widget' => '<div class="widget-wrapper">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="widget-title">',
      'after_title' => '</h2>'
    )
  );
  register_sidebar(
    array(
      'name' => 'Service 003',
      'id' => 'services-003',
      'description' => 'Troisieme Service',
      'before_widget' => '<div class="widget-wrapper">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="widget-title">',
      'after_title' => '</h2>'
    )
  );
}
