<?php

function discovering_minnesota_theme_support()
{
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'discovering_minnesota_theme_support');

function discovering_minnesota_menus()
{
  $location = array(
    'company' => "Company menu",
    'others' => "Others menu",
    'social' => "Social menu",
  );
  register_nav_menus($location);
}

add_action('init', 'discovering_minnesota_menus');

// function register_rest_images()
// {
//   register_rest_field(
//     array('post'),
//     'fimg_url',
//     array(
//       'get_callback'    => 'get_rest_featured_image',
//       'update_callback' => null,
//       'schema'          => null,
//     )
//   );
// }

// add_action('rest_api_init', 'register_rest_images');

// function get_rest_featured_image($object, $field_name, $request)
// {
//   if ($object['featured_media']) {
//     $img = wp_get_attachment_image_src($object['featured_media'], 'app-thumb');
//     return $img[0];
//   }
//   return false;
// }

function discovering_minnesota_register_style()
{
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('discovering-minnesota-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
  wp_enqueue_style('font-awesome', "//use.fontawesome.com/releases/v5.7.0/css/all.css", array(), '5.7', 'all');
  wp_enqueue_style('sora-google-font', "https://fonts.googleapis.com/css2?family=Inter&display=swap", array(), '1.0', 'all');
  wp_enqueue_script('tailwind-css', '//cdn.tailwindcss.com', array(), '3.0', false);
  wp_enqueue_script('tailwind-config-css', get_template_directory_uri() . '/assets/script/tailwind.config.js', array(), '1.0', false);
}

add_action('wp_enqueue_scripts', 'discovering_minnesota_register_style');

function discovering_minnesota_register_script()
{
  wp_enqueue_script('axios', '//cdn.jsdelivr.net/npm/axios/dist/axios.min.js', array(), null, true);
  wp_enqueue_script('jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js', array(), null, true);
  wp_enqueue_script('script', get_template_directory_uri() . '/assets/script/script.js', array('axios', 'jquery'), '1.1', true);
  wp_enqueue_script('level', get_template_directory_uri() . '/assets/script/level.js', array('script'), '1.0', true);
  wp_enqueue_script('blog-video', get_template_directory_uri() . '/assets/script/video.js', array('script'), '1.0', true);

  wp_localize_script('script', 'myObj', array(
    'restURL' => rest_url(),
    'restNonce' => wp_create_nonce('wp_rest')
  ));
}

add_action('wp_enqueue_scripts', 'discovering_minnesota_register_script');
