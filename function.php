<?php
namespace App;

function Binotheme_support(){
  add_theme_support('title-tag');
  add_theme_support( 'post-thumbnails' );
}

function Binotheme_register_assets{
  wp_register_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
  wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', 'popper', 'jquery', false, true);
  wp_register_style('popper') , 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', [], false, true);
  wp_deregister_style('jquery');
  wp_register_style('jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', [], false, true);
  // wp_register_style('font-awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'[], false, true);
  wp_enqueue_style('bootstrap');
  // wp_enqueue_scripts('font-awesome');
  wp_enqueue_scripts('bootstrap');
  wp_register_style('style', get_bloginfo( 'stylesheet_url' ),'',false,'screen');
  wp_enqueue_style('style');
  wp_register_scripts('script', get_theme_file_uri('script.js'), array(), null, true );
  wp_enqueue_scripts('script');

}

add_action('after_setup-theme', 'App\Binotheme_support');
add_action('wp_enqueue_scripts', 'App\Binotheme_register_assets');



// $logo = [0=>"fa fa-clone mt-3", 1=>"fa fa-heart-o mt-3", 2=>"fa fa-lightbulb-o mt-3", 3=>"fa fa-comments-o mt-3"];
//
// if (condition) {
//   // code...
// }
