<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style(
    'child-style',
    get_stylesheet_directory_uri() . '/style.css',
    array('parent-style')
  );

  wp_enqueue_style('parent-style', get_template_directory_uri() . '/css/common-child.min.css');
  wp_enqueue_style(
    'child-recruit-style',
    get_stylesheet_directory_uri() . '/css/common-child.min.css',
    array('parent-style')
  );

  wp_enqueue_script(
    'child-js',
    get_stylesheet_directory_uri() . '/afterschool.js',
    array(),
    '',
    true
  );
  wp_enqueue_script(
    'scroll-js',
    get_stylesheet_directory_uri() . '/scrollreveal.min.js',
    array(),
    '',
    true
  );
}
